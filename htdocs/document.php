<?php
/* Copyright (C) 2004-2007 Rodolphe Quiedeville <rodolphe@quiedeville.org>
 * Copyright (C) 2004-2012 Laurent Destailleur  <eldy@users.sourceforge.net>
 * Copyright (C) 2005      Simon Tosser         <simon@kornog-computing.com>
 * Copyright (C) 2005-2012 Regis Houssin        <regis.houssin@capnetworks.com>
 * Copyright (C) 2010	   Pierre Morin         <pierre.morin@auguria.net>
 * Copyright (C) 2010	   Juanjo Menent        <jmenent@2byte.es>
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
 *	\file       htdocs/document.php
 *  \brief      Wrapper to download data files
 *  \remarks    Call of this wrapper is made with URL:
 * 				document.php?modulepart=repfichierconcerne&file=pathrelatifdufichier
 */

define('NOTOKENRENEWAL',1); // Disables token renewal
// Pour autre que bittorrent, on charge environnement + info issus de logon (comme le user)
if (isset($_GET["modulepart"]) && $_GET["modulepart"] == 'bittorrent' && ! defined("NOLOGIN"))
{
	define("NOLOGIN",1);
	define("NOCSRFCHECK",1);	// We accept to go on this page from external web site.
}
if (! defined('NOREQUIREMENU')) define('NOREQUIREMENU','1');
if (! defined('NOREQUIREHTML')) define('NOREQUIREHTML','1');
if (! defined('NOREQUIREAJAX')) define('NOREQUIREAJAX','1');

/**
 * Wrapper, donc header vierge
 *
 * @return  null
 */
function llxHeader() { }

require 'main.inc.php';	// Load $user and permissions
require_once DOL_DOCUMENT_ROOT.'/core/lib/files.lib.php';

$encoding = '';
$action=GETPOST('action','alpha');
$original_file=GETPOST('file','alpha');	// Do not use urldecode here ($_GET are already decoded by PHP).
$modulepart=GETPOST('modulepart','alpha');
$urlsource=GETPOST('urlsource','alpha');
$entity=GETPOST('entity')?GETPOST('entity','int'):$conf->entity;

// Security check
if (empty($modulepart)) accessforbidden('Bad value for parameter modulepart');


/*
 * Action
 */

// None


/*
 * View
 */

// Define mime type
$type = 'application/octet-stream';
if (GETPOST('type','alpha')) $type=GETPOST('type','alpha');
else $type=dol_mimetype($original_file);

// Define attachment (attachment=true to force choice popup 'open'/'save as')
$attachment = true;
if (preg_match('/\.(html|htm)$/i',$original_file)) $attachment = false;
if (isset($_GET["attachment"])) $attachment = GETPOST("attachment")?true:false;
if (! empty($conf->global->MAIN_DISABLE_FORCE_SAVEAS)) $attachment=false;

// Suppression de la chaine de caractere ../ dans $original_file
$original_file = str_replace("../","/", $original_file);

// Find the subdirectory name as the reference
$refname=basename(dirname($original_file)."/");

// Security check
$accessallowed=0;
$sqlprotectagainstexternals='';
if ($modulepart)
{
	// On fait une verification des droits et on definit le repertoire concerne

	// Wrapping for third parties
	if ($modulepart == 'company' || $modulepart == 'societe')
	{
		if ($user->rights->societe->lire || preg_match('/^specimen/i',$original_file))
		{
			$accessallowed=1;
		}
		$original_file=$conf->societe->multidir_output[$entity].'/'.$original_file;
		$sqlprotectagainstexternals = "SELECT rowid as fk_soc FROM ".MAIN_DB_PREFIX."societe WHERE rowid='".$refname."' AND entity IN (".getEntity('societe', 1).")";
	}

	// Wrapping for invoices
	else if ($modulepart == 'facture' || $modulepart == 'invoice')
	{
		if ($user->rights->facture->lire || preg_match('/^specimen/i',$original_file))
		{
			$accessallowed=1;
		}
		$original_file=$conf->facture->dir_output.'/'.$original_file;
		$sqlprotectagainstexternals = "SELECT fk_soc as fk_soc FROM ".MAIN_DB_PREFIX."facture WHERE ref='".$refname."' AND entity=".$conf->entity;
	}

	else if ($modulepart == 'unpaid')
	{
		if ($user->rights->facture->lire || preg_match('/^specimen/i',$original_file))
		{
			$accessallowed=1;
		}
		$original_file=$conf->facture->dir_output.'/unpaid/temp/'.$original_file;
	}

	// Wrapping pour les fiches intervention
	else if ($modulepart == 'ficheinter')
	{
		if ($user->rights->ficheinter->lire || preg_match('/^specimen/i',$original_file))
		{
			$accessallowed=1;
		}
		$original_file=$conf->ficheinter->dir_output.'/'.$original_file;
		$sqlprotectagainstexternals = "SELECT fk_soc as fk_soc FROM ".MAIN_DB_PREFIX."fichinter WHERE ref='".$refname."' AND entity=".$conf->entity;
	}

	// Wrapping pour les prelevements
	else if ($modulepart == 'prelevement')
	{
		if ($user->rights->prelevement->bons->lire || preg_match('/^specimen/i',$original_file))
		{
			$accessallowed=1;
		}
		$original_file=$conf->prelevement->dir_output.'/'.$original_file;
	}

	// Wrapping pour les propales
	else if ($modulepart == 'propal')
	{
		if ($user->rights->propal->lire || preg_match('/^specimen/i',$original_file))
		{
			$accessallowed=1;
		}

		$original_file=$conf->propal->dir_output.'/'.$original_file;
		$sqlprotectagainstexternals = "SELECT fk_soc as fk_soc FROM ".MAIN_DB_PREFIX."propal WHERE ref='".$refname."' AND entity=".$conf->entity;
	}

	// Wrapping pour les commandes
	else if ($modulepart == 'commande' || $modulepart == 'order')
	{
		if ($user->rights->commande->lire || preg_match('/^specimen/i',$original_file))
		{
			$accessallowed=1;
		}
		$original_file=$conf->commande->dir_output.'/'.$original_file;
		$sqlprotectagainstexternals = "SELECT fk_soc as fk_soc FROM ".MAIN_DB_PREFIX."commande WHERE ref='".$refname."' AND entity=".$conf->entity;
	}

	// Wrapping pour les projets
	else if ($modulepart == 'project')
	{
		if ($user->rights->projet->lire || preg_match('/^specimen/i',$original_file))
		{
			$accessallowed=1;
		}
		$original_file=$conf->projet->dir_output.'/'.$original_file;
		$sqlprotectagainstexternals = "SELECT fk_soc as fk_soc FROM ".MAIN_DB_PREFIX."projet WHERE ref='".$refname."' AND entity=".$conf->entity;
	}

	// Wrapping pour les commandes fournisseurs
	else if ($modulepart == 'commande_fournisseur' || $modulepart == 'order_supplier')
	{
		if ($user->rights->fournisseur->commande->lire || preg_match('/^specimen/i',$original_file))
		{
			$accessallowed=1;
		}
		$original_file=$conf->fournisseur->commande->dir_output.'/'.$original_file;
		$sqlprotectagainstexternals = "SELECT fk_soc as fk_soc FROM ".MAIN_DB_PREFIX."commande_fournisseur WHERE ref='".$refname."' AND entity=".$conf->entity;
	}

	// Wrapping pour les factures fournisseurs
	else if ($modulepart == 'facture_fournisseur' || $modulepart == 'invoice_supplier')
	{
		if ($user->rights->fournisseur->facture->lire || preg_match('/^specimen/i',$original_file))
		{
			$accessallowed=1;
		}
		$original_file=$conf->fournisseur->facture->dir_output.'/'.$original_file;
		$sqlprotectagainstexternals = "SELECT fk_soc as fk_soc FROM ".MAIN_DB_PREFIX."facture_fourn WHERE facnumber='".$refname."' AND entity=".$conf->entity;
	}

	// Wrapping pour les rapport de paiements
	else if ($modulepart == 'facture_paiement')
	{
		if ($user->rights->facture->lire || preg_match('/^specimen/i',$original_file))
		{
			$accessallowed=1;
		}
		if ($user->societe_id > 0) $original_file=$conf->facture->dir_output.'/payments/private/'.$user->id.'/'.$original_file;
		else $original_file=$conf->facture->dir_output.'/payments/'.$original_file;
	}

	// Wrapping pour les exports de compta
	else if ($modulepart == 'export_compta')
	{
		if ($user->rights->compta->ventilation->creer || preg_match('/^specimen/i',$original_file))
		{
			$accessallowed=1;
		}
		$original_file=$conf->compta->dir_output.'/'.$original_file;
	}

	// Wrapping pour les expedition
	else if ($modulepart == 'expedition')
	{
		if ($user->rights->expedition->lire || preg_match('/^specimen/i',$original_file))
		{
			$accessallowed=1;
		}
		$original_file=$conf->expedition->dir_output."/sending/".$original_file;
	}

	// Wrapping pour les bons de livraison
	else if ($modulepart == 'livraison')
	{
		if ($user->rights->expedition->livraison->lire || preg_match('/^specimen/i',$original_file))
		{
			$accessallowed=1;
		}
		$original_file=$conf->expedition->dir_output."/receipt/".$original_file;
	}

	// Wrapping pour les actions
	else if ($modulepart == 'actions')
	{
		if ($user->rights->agenda->myactions->read || preg_match('/^specimen/i',$original_file))
		{
		$accessallowed=1;
		}
		$original_file=$conf->agenda->dir_output.'/'.$original_file;
	}

	// Wrapping pour les actions
	else if ($modulepart == 'actionsreport')
	{
		if ($user->rights->agenda->allactions->read || preg_match('/^specimen/i',$original_file))
		{
			$accessallowed=1;
		}
		$original_file = $conf->agenda->dir_temp."/".$original_file;
	}

	// Wrapping pour les produits et services
	else if ($modulepart == 'produit' || $modulepart == 'service')
	{
		if (($user->rights->produit->lire || $user->rights->service->lire) || preg_match('/^specimen/i',$original_file))
		{
			$accessallowed=1;
		}
		if (! empty($conf->product->enabled)) $original_file=$conf->product->multidir_output[$entity].'/'.$original_file;
		elseif (! empty($conf->service->enabled)) $original_file=$conf->service->multidir_output[$entity].'/'.$original_file;
	}

	// Wrapping pour les contrats
	else if ($modulepart == 'contract')
	{
		if ($user->rights->contrat->lire || preg_match('/^specimen/i',$original_file))
		{
			$accessallowed=1;
		}
		$original_file=$conf->contrat->dir_output.'/'.$original_file;
	}

	// Wrapping pour les dons
	else if ($modulepart == 'donation')
	{
		if ($user->rights->don->lire || preg_match('/^specimen/i',$original_file))
		{
			$accessallowed=1;
		}
		$original_file=$conf->don->dir_output.'/'.$original_file;
	}

	// Wrapping pour les remises de cheques
	else if ($modulepart == 'remisecheque')
	{
		if ($user->rights->banque->lire || preg_match('/^specimen/i',$original_file))
		{
			$accessallowed=1;
		}

		$original_file=$conf->banque->dir_output.'/bordereau/'.get_exdir(basename($original_file,".pdf"),2,1).$original_file;
	}

	// Wrapping for export module
	else if ($modulepart == 'export')
	{
		// Aucun test necessaire car on force le rep de download sur
		// le rep export qui est propre a l'utilisateur
		$accessallowed=1;
		$original_file=$conf->export->dir_temp.'/'.$user->id.'/'.$original_file;
	}

	// Wrapping for import module
	else if ($modulepart == 'import')
	{
		// Aucun test necessaire car on force le rep de download sur
		// le rep export qui est propre a l'utilisateur
		$accessallowed=1;
		$original_file=$conf->import->dir_temp.'/'.$original_file;
	}

	// Wrapping pour l'editeur wysiwyg
	else if ($modulepart == 'editor')
	{
		// Aucun test necessaire car on force le rep de download sur
		// le rep export qui est propre a l'utilisateur
		$accessallowed=1;
		$original_file=$conf->fckeditor->dir_output.'/'.$original_file;
	}

	// Wrapping pour les backups
	else if ($modulepart == 'systemtools')
	{
		if ($user->admin)
		{
			$accessallowed=1;
		}
		$original_file=$conf->admin->dir_output.'/'.$original_file;
	}
        // Model de contract
        else if ($modulepart == 'modelcontract')
	{
		if ($user->admin)
		{
			$accessallowed=1;
		}
                $tmpdir=trim($conf->global->CONTRAT_ADDON_PDF_ODT_PATH);
                if($conf->multicompany->enabled && $conf->entity > 1)
                    $upload_dir=preg_replace('/DOL_DATA_ROOT/',DOL_DATA_ROOT."/".$conf->entity,$tmpdir);
                else
                    $upload_dir=preg_replace('/DOL_DATA_ROOT/',DOL_DATA_ROOT,$tmpdir);
		$original_file=$upload_dir.'/'.$original_file;
	}

	// Wrapping for upload file test
	else if ($modulepart == 'admin_temp')
	{
		if ($user->admin)
			$accessallowed=1;
		$original_file=$conf->admin->dir_temp.'/'.$original_file;
	}

	// Wrapping pour BitTorrent
	else if ($modulepart == 'bittorrent')
	{
		$accessallowed=1;
		$dir='files';
		if ($type == 'application/x-bittorrent') $dir='torrents';
		$original_file=$conf->bittorrent->dir_output.'/'.$dir.'/'.$original_file;
	}

    // Wrapping pour Foundation module
    else if ($modulepart == 'member')
    {
        if ($user->rights->adherent->lire || preg_match('/^specimen/i',$original_file))
        {
            $accessallowed=1;
        }
        $original_file=$conf->adherent->dir_output.'/'.$original_file;
    }

    // Wrapping for Scanner
    else if ($modulepart == 'scanner_user_temp')
    {
        $accessallowed=1;
        $original_file=$conf->scanner->dir_temp.'/'.$user->id.'/'.$original_file;
    }

	// Generic wrapping
	else
	{
		// For dir temp
		$dir_temp=false;
		if (preg_match('/\_temp$/i', $modulepart)) {
			$modulepart = str_replace('_temp', '', $modulepart);
			$dir_temp=true;
		}
		// Define $accessallowed
		if (($user->rights->$modulepart->lire) || ($user->rights->$modulepart->read) || ($user->rights->$modulepart->download)) $accessallowed=1;	// No subpermission, we have checked on main permission
		elseif (preg_match('/^specimen/i',$original_file))	$accessallowed=1;    // If link to a specimen
 		elseif ($user->admin) $accessallowed=1;    // If user is admin

 		// For modules who wants to manage different levels of permissions for documents
	    $subPermCategoryConstName = strtoupper($modulepart).'_SUBPERMCATEGORY_FOR_DOCUMENTS';
		if (! empty($conf->global->$subPermCategoryConstName))
		{
		    $subPermCategory = $conf->global->$subPermCategoryConstName;
    		if (! empty($subPermCategory) && (($user->rights->$modulepart->$subPermCategory->lire) || ($user->rights->$modulepart->$subPermCategory->read) || ($user->rights->$modulepart->$subPermCategory->download)))
    		{
    		    $accessallowed=1;
    		}
		}

 		// Define $original_file
 		$dir = $conf->$modulepart->dir_output;
 		if ($dir_temp) $dir = $conf->$modulepart->dir_temp;
 		$original_file = $dir.'/'.$original_file;

 		// Define $sqlprotectagainstexternals for modules who want to protect access using a SQL query.
 		$sqlProtectConstName = strtoupper($modulepart).'_SQLPROTECTAGAINSTEXTERNALS_FOR_DOCUMENTS';
		if (! empty($conf->global->$sqlProtectConstName))	// If module want to define its own $sqlprotectagainstexternals
		{
			// Example: mymodule__SQLPROTECTAGAINSTEXTERNALS_FOR_DOCUMENTS = "SELECT fk_soc FROM ".MAIN_DB_PREFIX.$modulepart." WHERE ref='".$refname."' AND entity=".$conf->entity;
			eval('$sqlprotectagainstexternals = "'.$conf->global->$sqlProtectConstName.'";');
		}
	}
}


// Basic protection (against external users only)
if ($user->societe_id > 0)
{
	if ($sqlprotectagainstexternals)
	{
		$resql = $db->query($sqlprotectagainstexternals);
		if ($resql)
		{
			$num=$db->num_rows($resql);
			$i=0;
			while ($i < $num)
			{
				$obj = $db->fetch_object($resql);
				if ($user->societe_id != $obj->fk_soc)
				{
					$accessallowed=0;
					break;
				}
				$i++;
			}
		}
	}
}

// Security:
// Limite acces si droits non corrects
if (! $accessallowed)
{
	accessforbidden();
}

// Security:
// On interdit les remontees de repertoire ainsi que les pipe dans
// les noms de fichiers.
if (preg_match('/\.\./',$original_file) || preg_match('/[<>|]/',$original_file))
{
	dol_syslog("Refused to deliver file ".$original_file);
	$file=basename($original_file);		// Do no show plain path of original_file in shown error message
	dol_print_error(0,$langs->trans("ErrorFileNameInvalid",$file));
	exit;
}


clearstatcache();

$filename = basename($original_file);

// Output file on browser
dol_syslog("document.php download $original_file $filename content-type=$type");
$original_file_osencoded=dol_osencode($original_file);	// New file name encoded in OS encoding charset

// This test if file exists should be useless. We keep it to find bug more easily
if (! file_exists($original_file_osencoded))
{
	dol_print_error(0,$langs->trans("ErrorFileDoesNotExists",$original_file));
	exit;
}

// Les drois sont ok et fichier trouve, on l'envoie

header('Content-Description: File Transfer');
if ($encoding)   header('Content-Encoding: '.$encoding);
if ($type)       header('Content-Type: '.$type.(preg_match('/text/',$type)?'; charset="'.$conf->file->character_set_client:''));
// Add MIME Content-Disposition from RFC 2183 (inline=automatically displayed, atachment=need user action to open)
if ($attachment) header('Content-Disposition: attachment; filename="'.$filename.'"');
else header('Content-Disposition: inline; filename="'.$filename.'"');
header('Content-Length: ' . dol_filesize($original_file));
// Ajout directives pour resoudre bug IE
header('Cache-Control: Public, must-revalidate');
header('Pragma: public');

//ob_clean();
//flush();

readfile($original_file_osencoded);

?>
