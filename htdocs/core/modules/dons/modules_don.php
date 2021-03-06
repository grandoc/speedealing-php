<?php
/* Copyright (C) 2003-2005 Rodolphe Quiedeville <rodolphe@quiedeville.org>
 * Copyright (C) 2004-2008 Laurent Destailleur  <eldy@users.sourceforge.net>
 * Copyright (C) 2004      Eric Seigne          <eric.seigne@ryxeo.com>
 * Copyright (C) 2005      Regis Houssin        <regis.houssin@capnetworks.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * or see http://www.gnu.org/
 */

/**
 *	    \file       htdocs/core/modules/dons/modules_don.php
 *		\ingroup    don
 *		\brief      File of class to manage donation document generation
 */
require_once DOL_DOCUMENT_ROOT.'/core/class/commondocgenerator.class.php';
require_once DOL_DOCUMENT_ROOT.'/compta/dons/class/don.class.php';



/**
 *	Parent class of subscription templates
 */
abstract class ModeleDon extends CommonDocGenerator
{
    var $error='';

    /**
     *  Return list of active generation modules
     *
     *  @param	DoliDB	$db     			Database handler
     *  @param  string	$maxfilenamelength  Max length of value to show
     *  @return	array						List of templates
     */
    static function liste_modeles($db,$maxfilenamelength=0)
    {
        global $conf;

        $type='donation';
        $liste=array();

        include_once DOL_DOCUMENT_ROOT.'/core/lib/functions2.lib.php';
        $liste=getListOfModels($db,$type,$maxfilenamelength);

        return $liste;
    }
}


/**
 *	Parent class of donation numbering templates
 */
abstract class ModeleNumRefDons
{
    var $error='';

    /**
     * 	Return if a module can be used or not
     *
     *  @return		boolean     true if module can be used
     */
    function isEnabled()
    {
        return true;
    }

    /**
     * 	Renvoi la description par defaut du modele de numerotation
     *
     *  @return     string      Texte descripif
     */
    function info()
    {
        global $langs;
        $langs->load("bills");
        return $langs->trans("NoDescription");
    }

    /**
     *  Renvoi un exemple de numerotation
     *
     *  @return     string      Example
     */
    function getExample()
    {
        global $langs;
        $langs->load("bills");
        return $langs->trans("NoExample");
    }

    /**
     * 	Test si les numeros deja en vigueur dans la base ne provoquent pas d
     *  de conflits qui empechera cette numerotation de fonctionner.
     *
     *  @return     boolean     false si conflit, true si ok
     */
    function canBeActivated()
    {
        return true;
    }

    /**
     *  Renvoi prochaine valeur attribuee
     *
     *  @return     string      Valeur
     */
    function getNextValue()
    {
        global $langs;
        return $langs->trans("NotAvailable");
    }

    /**
     *  Renvoi version du module numerotation
     *
     *  @return     string      Valeur
     */
    function getVersion()
    {
        global $langs;
        $langs->load("admin");

        if ($this->version == 'development') return $langs->trans("VersionDevelopment");
        if ($this->version == 'experimental') return $langs->trans("VersionExperimental");
        if ($this->version == 'dolibarr') return DOL_VERSION;
        return $langs->trans("NotAvailable");
    }
}


/**
 *	Cree un don sur disque en fonction du modele de DON_ADDON_PDF
 *
 *	@param	DoliDB		$db  			Databse handler
 *	@param	int			$id				Id donation
 *	@param	string		$message		Message
 *	@param	string		$modele			Force le modele a utiliser ('' par defaut)
 *	@param	Translate	$outputlangs	Object langs
 *	@return int         				0 if KO, 1 if OK
 */
function don_create($db, $id, $message, $modele, $outputlangs)
{
    global $conf, $langs;
    $langs->load("bills");

    $eror=0;

    // Increase limit for PDF build
    $err=error_reporting();
    error_reporting(0);
    @set_time_limit(120);
    error_reporting($err);

    $srctemplatepath='';

    // Set template to use
    if (! dol_strlen($modele))
    {
        if (! empty($conf->global->DON_ADDON_MODEL))
        {
            $modele = $conf->global->DON_ADDON_MODEL;
        }
        else
        {
            print $langs->trans("Error")." ".$langs->trans("Error_DON_ADDON_MODEL_NotDefined");
            return 0;
        }
    }

    // If selected modele is a filename template (then $modele="modelname:filename")
    $tmp=explode(':',$modele,2);
    if (! empty($tmp[1]))
    {
    	$modele=$tmp[0];
    	$srctemplatepath=$tmp[1];
    }

    // Search template files
    $file=''; $classname=''; $filefound=0;
    $dirmodels=array('/');
    if (is_array($conf->modules_parts['models'])) $dirmodels=array_merge($dirmodels,$conf->modules_parts['models']);
    foreach($dirmodels as $reldir)
    {
    	foreach(array('html','doc','pdf') as $prefix)
    	{
    		$file = $prefix."_".preg_replace('/^html_/','',$modele).".modules.php";

    		// On verifie l'emplacement du modele
    		$file=dol_buildpath($reldir."core/modules/dons/".$file,0);
    		if (file_exists($file))
    		{
    			$filefound=1;
    			$classname=$prefix.'_'.$modele;
    			break;
    		}
    	}
    	if ($filefound) break;
    }

    // Charge le modele
	if ($filefound)
	{
        require_once $file;

        $object=new Don($db);
        $object->fetch($id);

        $classname = $modele;
        $obj = new $classname($db);

        // We save charset_output to restore it because write_file can change it if needed for
        // output format that does not support UTF8.
        $sav_charset_output=$outputlangs->charset_output;
        if ($obj->write_file($object,$outputlangs, $srctemplatepath, $hidedetails, $hidedesc, $hideref, $hookmanager) > 0)
        {
            $outputlangs->charset_output=$sav_charset_output;

			// we delete preview files
        	require_once DOL_DOCUMENT_ROOT.'/core/lib/files.lib.php';
            dol_delete_preview($object);
            return 1;
        }
        else
        {
            $outputlangs->charset_output=$sav_charset_output;
            dol_syslog("Erreur dans don_create");
            dol_print_error($db,$obj->error);
            return 0;
        }
    }
    else
    {
        print $langs->trans("Error")." ".$langs->trans("ErrorFileDoesNotExists",$dir.$file);
        return 0;
    }
}

?>
