<?php
/* Copyright (C) 2005      Patrick Rouillon     <patrick@rouillon.net>
 * Copyright (C) 2005-2009 Destailleur Laurent  <eldy@users.sourceforge.net>
 * Copyright (C) 2005-2012 Regis Houssin        <regis.houssin@capnetworks.com>
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
 *       \file       htdocs/fourn/commande/contact.php
 *       \ingroup    commande
 *       \brief      Onglet de gestion des contacts de commande
 */

require '../../main.inc.php';
require_once DOL_DOCUMENT_ROOT.'/fourn/class/fournisseur.commande.class.php';
require_once DOL_DOCUMENT_ROOT.'/contact/class/contact.class.php';
require_once DOL_DOCUMENT_ROOT.'/core/lib/fourn.lib.php';
require_once DOL_DOCUMENT_ROOT.'/core/class/html.formcompany.class.php';

$langs->load("facture");
$langs->load("orders");
$langs->load("sendings");
$langs->load("companies");

$id		= GETPOST('id', 'int');
$ref	= GETPOST('ref', 'alpha');
$action	= GETPOST('action', 'alpha');

// Security check
if ($user->societe_id) $socid=$user->societe_id;
$result = restrictedArea($user, 'commande_fournisseur', $id,'');

$object = new CommandeFournisseur($db);


/*
 * Ajout d'un nouveau contact
 */

if ($action == 'addcontact' && $user->rights->fournisseur->commande->creer)
{
	$result = $object->fetch($id);

    if ($result > 0 && $id > 0)
    {
    	$contactid = (GETPOST('userid') ? GETPOST('userid') : GETPOST('contactid'));
  		$result = $result = $object->add_contact($contactid, $_POST["type"], $_POST["source"]);
    }

	if ($result >= 0)
	{
		header("Location: ".$_SERVER['PHP_SELF']."?id=".$object->id);
		exit;
	}
	else
	{
		if ($object->error == 'DB_ERROR_RECORD_ALREADY_EXISTS')
		{
			$langs->load("errors");
			$mesg = '<div class="error">'.$langs->trans("ErrorThisContactIsAlreadyDefinedAsThisType").'</div>';
		}
		else
		{
			$mesg = '<div class="error">'.$object->error.'</div>';
		}
	}
}

// bascule du statut d'un contact
else if ($action == 'swapstatut' && $user->rights->fournisseur->commande->creer)
{
	if ($object->fetch($id))
	{
	    $result=$object->swapContactStatus(GETPOST('ligne'));
	}
	else
	{
		dol_print_error($db);
	}
}

// Efface un contact
else if ($action == 'deletecontact' && $user->rights->fournisseur->commande->creer)
{
	$object->fetch($id);
	$result = $object->delete_contact($_GET["lineid"]);

	if ($result >= 0)
	{
		header("Location: ".$_SERVER['PHP_SELF']."?id=".$object->id);
		exit;
	}
	else {
		dol_print_error($db);
	}
}



/*
 * View
 */

llxHeader('', $langs->trans("Order"), "Commande");

$form = new Form($db);
$formcompany = new FormCompany($db);
$contactstatic=new Contact($db);
$userstatic=new User($db);


/* *************************************************************************** */
/*                                                                             */
/* Mode vue et edition                                                         */
/*                                                                             */
/* *************************************************************************** */
dol_htmloutput_mesg($mesg);

if ($id > 0 || ! empty($ref))
{
	$langs->trans("OrderCard");

	if ($object->fetch($id, $ref) > 0)
	{
		$soc = new Societe($db);
		$soc->fetch($object->socid);


		$head = ordersupplier_prepare_head($object);
		dol_fiche_head($head, 'contact', $langs->trans("SupplierOrder"), 0, 'order');


		/*
		*   Facture synthese pour rappel
		*/
		print '<table class="border" width="100%">';

		$linkback = '<a href="'.DOL_URL_ROOT.'/fourn/commande/liste.php'.(! empty($socid)?'?socid='.$socid:'').'">'.$langs->trans("BackToList").'</a>';

		// Ref
		print '<tr><td width="20%">'.$langs->trans("Ref").'</td>';
		print '<td colspan="2">';
		print $form->showrefnav($object, 'ref', $linkback, 1, 'ref', 'ref');
		print '</td>';
		print '</tr>';

		// Fournisseur
		print '<tr><td>'.$langs->trans("Supplier")."</td>";
		print '<td colspan="2">'.$soc->getNomUrl(1,'supplier').'</td>';
		print '</tr>';

		print "</table>";

		print '</div>';

		print '<br>';
		
		// Contacts lines
		include DOL_DOCUMENT_ROOT.'/core/tpl/contacts.tpl.php';
		
	}
	else
	{
		// Contrat non trouv
		print "ErrorRecordNotFound";
	}
}


llxFooter();
$db->close();
?>