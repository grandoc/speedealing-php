<?php
/* Copyright (C) 2004      Rodolphe Quiedeville <rodolphe@quiedeville.org>
 * Copyright (C) 2004      Sebastien Di Cintio  <sdicintio@ressource-toi.org>
 * Copyright (C) 2004      Benoit Mortier       <benoit.mortier@opensides.be>
 * Copyright (C) 2005      Regis Houssin        <regis.houssin@capnetworks.com>
 * Copyright (C) 2006-2011 Laurent Destailleur  <eldy@users.sourceforge.net>
 * Copyright (C) 2011 	   Juanjo Menent		<jmenent@2byte.es>
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
 */

/**
 *   	\file       htdocs/admin/ldap_users.php
 *		\ingroup    ldap
 *		\brief      Page d'administration/configuration du module Ldap
 */

require '../main.inc.php';
require_once DOL_DOCUMENT_ROOT.'/core/lib/admin.lib.php';
require_once DOL_DOCUMENT_ROOT.'/user/class/user.class.php';
require_once DOL_DOCUMENT_ROOT.'/user/class/usergroup.class.php';
require_once DOL_DOCUMENT_ROOT.'/core/class/ldap.class.php';
require_once DOL_DOCUMENT_ROOT.'/core/lib/ldap.lib.php';

$langs->load("admin");
$langs->load("errors");

if (!$user->admin)
  accessforbidden();

$action = GETPOST("action");

/*
 * Actions
 */

if ($action == 'setvalue' && $user->admin)
{
	$error=0;
	$db->begin();
	
	if (! dolibarr_set_const($db, 'LDAP_USER_DN',GETPOST("user"),'chaine',0,'',$conf->entity)) $error++;
	if (! dolibarr_set_const($db, 'LDAP_USER_OBJECT_CLASS',GETPOST("objectclass"),'chaine',0,'',$conf->entity)) $error++;
	if (! dolibarr_set_const($db, 'LDAP_FILTER_CONNECTION',GETPOST("filterconnection"),'chaine',0,'',$conf->entity)) $error++;
	if (! dolibarr_set_const($db, 'LDAP_FIELD_FULLNAME',GETPOST("fieldfullname"),'chaine',0,'',$conf->entity)) $error++;
	if (! dolibarr_set_const($db, 'LDAP_FIELD_LOGIN',GETPOST("fieldlogin"),'chaine',0,'',$conf->entity)) $error++;
	if (! dolibarr_set_const($db, 'LDAP_FIELD_LOGIN_SAMBA',GETPOST("fieldloginsamba"),'chaine',0,'',$conf->entity)) $error++;
	if (! dolibarr_set_const($db, 'LDAP_FIELD_PASSWORD',GETPOST("fieldpassword"),'chaine',0,'',$conf->entity)) $error++;
	if (! dolibarr_set_const($db, 'LDAP_FIELD_PASSWORD_CRYPTED',GETPOST("fieldpasswordcrypted"),'chaine',0,'',$conf->entity)) $error++;
	if (! dolibarr_set_const($db, 'LDAP_FIELD_NAME',GETPOST("fieldname"),'chaine',0,'',$conf->entity)) $error++;
	if (! dolibarr_set_const($db, 'LDAP_FIELD_FIRSTNAME',GETPOST("fieldfirstname"),'chaine',0,'',$conf->entity)) $error++;
	if (! dolibarr_set_const($db, 'LDAP_FIELD_MAIL',GETPOST("fieldmail"),'chaine',0,'',$conf->entity)) $error++;
	if (! dolibarr_set_const($db, 'LDAP_FIELD_PHONE',GETPOST("fieldphone"),'chaine',0,'',$conf->entity)) $error++;
	if (! dolibarr_set_const($db, 'LDAP_FIELD_MOBILE',GETPOST("fieldmobile"),'chaine',0,'',$conf->entity)) $error++;
	if (! dolibarr_set_const($db, 'LDAP_FIELD_FAX',GETPOST("fieldfax"),'chaine',0,'',$conf->entity)) $error++;
	if (! dolibarr_set_const($db, 'LDAP_FIELD_DESCRIPTION',GETPOST("fielddescription"),'chaine',0,'',$conf->entity)) $error++;
	if (! dolibarr_set_const($db, 'LDAP_FIELD_SID',GETPOST("fieldsid"),'chaine',0,'',$conf->entity)) $error++;

    // This one must be after the others
    $valkey='';
    $key=GETPOST("key");
    if ($key) $valkey=$conf->global->$key;
    if (! dolibarr_set_const($db, 'LDAP_KEY_USERS',$valkey,'chaine',0,'',$conf->entity)) $error++;

	if (! $error)
  	{
  		$db->commit();
  		$mesg='<div class="ok">'.$langs->trans("SetupSaved").'</div>';
  	}
  	else
  	{
  		$db->rollback();
		dol_print_error($db);
    }
}



/*
 * Visu
 */

llxHeader('',$langs->trans("LDAPSetup"),'EN:Module_LDAP_En|FR:Module_LDAP|ES:M&oacute;dulo_LDAP');
$linkback='<a href="'.DOL_URL_ROOT.'/admin/modules.php">'.$langs->trans("BackToModuleList").'</a>';

print_fiche_titre($langs->trans("LDAPSetup"),$linkback,'setup');

$head = ldap_prepare_head();

// Test si fonction LDAP actives
if (! function_exists("ldap_connect"))
{
	$mesg.='<div class="error">'.$langs->trans("LDAPFunctionsNotAvailableOnPHP").'</div>';  ;
}

dol_fiche_head($head, 'users', $langs->trans("LDAPSetup"));

print $langs->trans("LDAPDescUsers").'<br>';
print '<br>';


print '<form method="post" action="'.$_SERVER["PHP_SELF"].'?action=setvalue">';
print '<input type="hidden" name="token" value="'.$_SESSION['newtoken'].'">';


$form=new Form($db);

print '<table class="noborder" width="100%">';
$var=true;

print '<tr class="liste_titre">';
print '<td colspan="4">'.$langs->trans("LDAPSynchronizeUsers").'</td>';
print "</tr>\n";

// DN Pour les utilisateurs
$var=!$var;
print '<tr '.$bc[$var].'><td width="25%"><span class="fieldrequired">'.$langs->trans("LDAPUserDn").'</span></td><td>';
print '<input size="48" type="text" name="user" value="'.$conf->global->LDAP_USER_DN.'">';
print '</td><td>'.$langs->trans("LDAPUserDnExample").'</td>';
print '<td>&nbsp;</td>';
print '</tr>';

// List of object class used to define attributes in structure
$var=!$var;
print '<tr '.$bc[$var].'><td width="25%"><span class="fieldrequired">'.$langs->trans("LDAPUserObjectClassList").'</span></td><td>';
print '<input size="48" type="text" name="objectclass" value="'.$conf->global->LDAP_USER_OBJECT_CLASS.'">';
print '</td><td>'.$langs->trans("LDAPUserObjectClassListExample").'</td>';
print '<td>&nbsp;</td>';
print '</tr>';

// Filtre
//Utilise pour filtrer la recherche
$var=!$var;
print '<tr '.$bc[$var].'><td>'.$langs->trans("LDAPFilterConnection").'</td><td>';
print '<input size="48" type="text" name="filterconnection" value="'.$conf->global->LDAP_FILTER_CONNECTION.'">';
print '</td><td>'.$langs->trans("LDAPFilterConnectionExample").'</td>';
print '<td></td>';
print '</tr>';

print '</table>';
print '<br>';
print '<table class="noborder" width="100%">';
$var=true;

print '<tr class="liste_titre">';
print '<td width="25%">'.$langs->trans("LDAPDolibarrMapping").'</td>';
print '<td colspan="2">'.$langs->trans("LDAPLdapMapping").'</td>';
print '<td align="right">'.$langs->trans("LDAPNamingAttribute").'</td>';
print "</tr>\n";

// Common name
$var=!$var;
print '<tr '.$bc[$var].'><td>'.$langs->trans("LDAPFieldFullname").'</td><td>';
print '<input size="25" type="text" name="fieldfullname" value="'.$conf->global->LDAP_FIELD_FULLNAME.'">';
print '</td><td>'.$langs->trans("LDAPFieldFullnameExample").'</td>';
print '<td align="right"><input type="radio" name="key" value="LDAP_FIELD_FULLNAME"'.(($conf->global->LDAP_KEY_USERS && $conf->global->LDAP_KEY_USERS==$conf->global->LDAP_FIELD_FULLNAME)?' checked="checked"':'')."></td>";
print '</tr>';

// Name
$var=!$var;
print '<tr '.$bc[$var].'><td>'.$langs->trans("LDAPFieldName").'</td><td>';
print '<input size="25" type="text" name="fieldname" value="'.$conf->global->LDAP_FIELD_NAME.'">';
print '</td><td>'.$langs->trans("LDAPFieldNameExample").'</td>';
print '<td align="right"><input type="radio" name="key" value="LDAP_FIELD_NAME"'.(($conf->global->LDAP_KEY_USERS && $conf->global->LDAP_KEY_USERS==$conf->global->LDAP_FIELD_NAME)?' checked="checked"':'')."></td>";
print '</tr>';

// Firstname
$var=!$var;
print '<tr '.$bc[$var].'><td>'.$langs->trans("LDAPFieldFirstName").'</td><td>';
print '<input size="25" type="text" name="fieldfirstname" value="'.$conf->global->LDAP_FIELD_FIRSTNAME.'">';
print '</td><td>'.$langs->trans("LDAPFieldFirstNameExample").'</td>';
print '<td align="right"><input type="radio" name="key" value="LDAP_FIELD_FIRSTNAME"'.(($conf->global->LDAP_KEY_USERS && $conf->global->LDAP_KEY_USERS==$conf->global->LDAP_FIELD_FIRSTNAME)?' checked="checked"':'')."></td>";
print '</tr>';

// Login unix
$var=!$var;
print '<tr '.$bc[$var].'><td>'.$langs->trans("LDAPFieldLoginUnix").'</td><td>';
print '<input size="25" type="text" name="fieldlogin" value="'.$conf->global->LDAP_FIELD_LOGIN.'">';
print '</td><td>'.$langs->trans("LDAPFieldLoginExample").'</td>';
print '<td align="right"><input type="radio" name="key" value="LDAP_FIELD_LOGIN"'.(($conf->global->LDAP_KEY_USERS && $conf->global->LDAP_KEY_USERS==$conf->global->LDAP_FIELD_LOGIN)?' checked="checked"':'')."></td>";
print '</tr>';

// Login samba
$var=!$var;
print '<tr '.$bc[$var].'><td>'.$langs->trans("LDAPFieldLoginSamba").'</td><td>';
print '<input size="25" type="text" name="fieldloginsamba" value="'.$conf->global->LDAP_FIELD_LOGIN_SAMBA.'">';
print '</td><td>'.$langs->trans("LDAPFieldLoginSambaExample").'</td>';
print '<td align="right"><input type="radio" name="key" value="LDAP_FIELD_LOGIN_SAMBA"'.(($conf->global->LDAP_KEY_USERS && $conf->global->LDAP_KEY_USERS==$conf->global->LDAP_FIELD_LOGIN_SAMBA)?' checked="checked"':'')."></td>";
print '</tr>';

// Password not crypted
$var=!$var;
print '<tr '.$bc[$var].'><td>'.$langs->trans("LDAPFieldPasswordNotCrypted").'</td><td>';
print '<input size="25" type="text" name="fieldpassword" value="'.$conf->global->LDAP_FIELD_PASSWORD.'">';
print '</td><td>'.$langs->trans("LDAPFieldPasswordExample").'</td>';
print '<td align="right"><input type="radio" name="key" value="LDAP_FIELD_PASSWORD"'.(($conf->global->LDAP_KEY_USERS && $conf->global->LDAP_KEY_USERS==$conf->global->LDAP_FIELD_PASSWORD)?' checked="checked"':'')."></td>";
print '</tr>';

// Password crypted
$var=!$var;
print '<tr '.$bc[$var].'><td>'.$langs->trans("LDAPFieldPasswordCrypted").'</td><td>';
print '<input size="25" type="text" name="fieldpasswordcrypted" value="'.$conf->global->LDAP_FIELD_PASSWORD_CRYPTED.'">';
print '</td><td>'.$langs->trans("LDAPFieldPasswordExample").'</td>';
print '<td align="right"><input type="radio" name="key" value="LDAP_FIELD_PASSWORD_CRYPTED"'.(($conf->global->LDAP_KEY_USERS && $conf->global->LDAP_KEY_USERS==$conf->global->LDAP_FIELD_PASSWORD_CRYPTED)?' checked="checked"':'')."></td>";
print '</tr>';

// Mail
$var=!$var;
print '<tr '.$bc[$var].'><td>'.$langs->trans("LDAPFieldMail").'</td><td>';
print '<input size="25" type="text" name="fieldmail" value="'.$conf->global->LDAP_FIELD_MAIL.'">';
print '</td><td>'.$langs->trans("LDAPFieldMailExample").'</td>';
print '<td align="right"><input type="radio" name="key" value="LDAP_FIELD_MAIL"'.(($conf->global->LDAP_KEY_USERS && $conf->global->LDAP_KEY_USERS==$conf->global->LDAP_FIELD_MAIL)?' checked="checked"':'')."></td>";
print '</tr>';

// Phone
$var=!$var;
print '<tr '.$bc[$var].'><td>'.$langs->trans("LDAPFieldPhone").'</td><td>';
print '<input size="25" type="text" name="fieldphone" value="'.$conf->global->LDAP_FIELD_PHONE.'">';
print '</td><td>'.$langs->trans("LDAPFieldPhoneExample").'</td>';
print '<td align="right"><input type="radio" name="key" value="LDAP_FIELD_PHONE"'.(($conf->global->LDAP_KEY_USERS && $conf->global->LDAP_KEY_USERS==$conf->global->LDAP_FIELD_PHONE)?' checked="checked"':'')."></td>";
print '</tr>';

// Mobile
$var=!$var;
print '<tr '.$bc[$var].'><td>'.$langs->trans("LDAPFieldMobile").'</td><td>';
print '<input size="25" type="text" name="fieldmobile" value="'.$conf->global->LDAP_FIELD_MOBILE.'">';
print '</td><td>'.$langs->trans("LDAPFieldMobileExample").'</td>';
print '<td align="right"><input type="radio" name="key" value="LDAP_FIELD_MOBILE"'.(($conf->global->LDAP_KEY_USERS && $conf->global->LDAP_KEY_USERS==$conf->global->LDAP_FIELD_MOBILE)?' checked="checked"':'')."></td>";
print '</tr>';

// Fax
$var=!$var;
print '<tr '.$bc[$var].'><td>'.$langs->trans("LDAPFieldFax").'</td><td>';
print '<input size="25" type="text" name="fieldfax" value="'.$conf->global->LDAP_FIELD_FAX.'">';
print '</td><td>'.$langs->trans("LDAPFieldFaxExample").'</td>';
print '<td align="right"><input type="radio" name="key" value="LDAP_FIELD_FAX"'.(($conf->global->LDAP_KEY_USERS && $conf->global->LDAP_KEY_USERS==$conf->global->LDAP_FIELD_FAX)?' checked="checked"':'')."></td>";
print '</tr>';

// Description
$var=!$var;
print '<tr '.$bc[$var].'><td>'.$langs->trans("LDAPFieldDescription").'</td><td>';
print '<input size="25" type="text" name="fielddescription" value="'.$conf->global->LDAP_FIELD_DESCRIPTION.'">';
print '</td><td>'.$langs->trans("LDAPFieldDescriptionExample").'</td>';
print '<td align="right"><input type="radio" name="key" value="LDAP_FIELD_DESCRIPTION"'.(($conf->global->LDAP_KEY_USERS && $conf->global->LDAP_KEY_USERS==$conf->global->LDAP_FIELD_DESCRIPTION)?' checked="checked"':'')."></td>";
print '</tr>';

// Sid
$var=!$var;
print '<tr '.$bc[$var].'><td>'.$langs->trans("LDAPFieldSid").'</td><td>';
print '<input size="25" type="text" name="fieldsid" value="'.$conf->global->LDAP_FIELD_SID.'">';
print '</td><td>'.$langs->trans("LDAPFieldSidExample").'</td>';
print '<td align="right"><input type="radio" name="key" value="LDAP_FIELD_SID"'.(($conf->global->LDAP_KEY_USERS && $conf->global->LDAP_KEY_USERS==$conf->global->LDAP_FIELD_SID)?' checked="checked"':'')."></td>";
print '</tr>';

$var=!$var;
print '<tr '.$bc[$var].'><td colspan="4" align="center"><input type="submit" class="button" value="'.$langs->trans("Modify").'"></td></tr>';
print '</table>';

print '</form>';

print '</div>';

print info_admin($langs->trans("LDAPDescValues"));


/*
 * Test de la connexion
 */
if ($conf->global->LDAP_SYNCHRO_ACTIVE == 'dolibarr2ldap')
{
	$butlabel=$langs->trans("LDAPTestSynchroUser");
	$testlabel='testuser';
	$key=$conf->global->LDAP_KEY_USERS;
	$dn=$conf->global->LDAP_USER_DN;
	$objectclass=$conf->global->LDAP_USER_OBJECT_CLASS;

	show_ldap_test_button($butlabel,$testlabel,$key,$dn,$objectclass);
}

if (function_exists("ldap_connect"))
{
	if ($_GET["action"] == 'testuser')
	{
		// Creation objet
		$object=new User($db);
		$object->initAsSpecimen();

		// TODO Mutualize code following with other ldap_xxxx.php pages

		// Test synchro
		$ldap=new Ldap();
		$result=$ldap->connect_bind();

		if ($result > 0)
		{
			$info=$object->_load_ldap_info();
			$dn=$object->_load_ldap_dn($info);

			$result1=$ldap->delete($dn);			// To be sure to delete existing records
			$result2=$ldap->add($dn,$info,$user);	// Now the test
			$result3=$ldap->delete($dn);			// Clean what we did

			if ($result2 > 0)
			{
				print img_picto('','info').' ';
				print '<font class="ok">'.$langs->trans("LDAPSynchroOK").'</font><br>';
			}
			else
			{
				print img_picto('','error').' ';
				print '<font class="error">'.$langs->trans("LDAPSynchroKOMayBePermissions");
				print ': '.$ldap->error;
				print '</font><br>';
				print $langs->trans("ErrorLDAPMakeManualTest",$conf->ldap->dir_temp).'<br>';
			}

			print "<br>\n";
			print "LDAP input file used for test:<br><br>\n";
			print nl2br($ldap->dump_content($dn,$info));
			print "\n<br>";
		}
		else
		{
			print img_picto('','error').' ';
			print '<font class="error">'.$langs->trans("LDAPSynchroKO");
			print ': '.$ldap->error;
			print '</font><br>';
			print $langs->trans("ErrorLDAPMakeManualTest",$conf->ldap->dir_temp).'<br>';
		}
	}
}

dol_htmloutput_mesg($mesg);

$db->close();

llxFooter();
?>
