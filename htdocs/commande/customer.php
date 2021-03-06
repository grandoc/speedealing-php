<?php
/* Copyright (C) 2003-2005 Rodolphe Quiedeville 	<rodolphe@quiedeville.org>
 * Copyright (C) 2004-2007 Laurent Destailleur  	<eldy@users.sourceforge.net>
 * Copyright (C) 2005-2009 Regis Houssin       		<regis.houssin@capnetworks.com>
 * Copyright (C) 2012	   Andreu Bisquerra Gaya	<jove@bisquerra.com>
 * Copyright (C) 2012	   David Rodriguez Martinez <davidrm146@gmail.com>
 * Copyright (C) 2012	   Juanjo Menent			<jmenent@2byte.es>
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
 *	\file       htdocs/commande/customer.php
 *	\ingroup    compta
 *	\brief      Show list of customers to add an new invoice from orders
 */

require '../main.inc.php';
require_once DOL_DOCUMENT_ROOT.'/contact/class/contact.class.php';
require_once DOL_DOCUMENT_ROOT.'/comm/action/class/actioncomm.class.php';

$action=GETPOST('action');

// Secrutiy check
if ($user->societe_id > 0)
{
	$action = '';
	$socid = $user->societe_id;
}

if (! $user->rights->facture->creer)
accessforbidden();

$langs->load("companies");
$langs->load("orders");
$sortfield = GETPOST("sortfield",'alpha');
$sortorder = GETPOST("sortorder",'alpha');
$page = GETPOST("page",'int');
if ($page == -1) { $page = 0; }
$offset = $conf->liste_limit * $page;
$pageprev = $page - 1;
$pagenext = $page + 1;
if (! $sortorder) $sortorder="ASC";
if (! $sortfield) $sortfield="nom";


/*
 * View
 */

llxHeader();

$thirdpartystatic=new Societe($db);

/*
 * Mode List
 */

$sql = "SELECT s.rowid, s.nom, s.client, s.ville, s.datec, s.datea";
$sql.= ", st.libelle as stcomm, s.prefix_comm, s.code_client, s.code_compta ";
if (!$user->rights->societe->client->voir && !$socid) $sql.= ", sc.fk_soc, sc.fk_user ";
$sql.= " FROM ".MAIN_DB_PREFIX."societe as s, ".MAIN_DB_PREFIX."c_stcomm as st, ".MAIN_DB_PREFIX."commande as c";
if (!$user->rights->societe->client->voir && !$socid) $sql.= ", ".MAIN_DB_PREFIX."societe_commerciaux as sc";
$sql.= " WHERE s.fk_stcomm = st.id AND c.fk_soc = s.rowid";
$sql.= " AND s.entity = ".$conf->entity;
if (!$user->rights->societe->client->voir && !$socid) $sql.= " AND s.rowid = sc.fk_soc AND sc.fk_user = " .$user->id;
if (dol_strlen($stcomm))
{
	$sql.= " AND s.fk_stcomm=$stcomm";
}

if ($_GET["search_nom"])
{
	$sql.= " AND s.nom like '%".$db->escape(strtolower($_GET["search_nom"]))."%'";
}
if ($_GET["search_compta"])
{
	$sql.= " AND s.code_compta like '%".$db->escape($_GET["search_compta"])."%'";
}
if ($_GET["search_code_client"])
{
	$sql.= " AND s.code_client like '%".$db->escape($_GET["search_code_client"])."%'";
}
if (dol_strlen($begin))
{
	$sql.= " AND s.nom like '".$db->escape($begin)."'";
}
if ($socid)
{
	$sql.= " AND s.rowid = ".$socid;
}
$sql.= " AND c.fk_statut in (1, 2) AND c.facture = 0";
$sql.= " GROUP BY s.nom";
$sql.= " ORDER BY $sortfield $sortorder " . $db->plimit($conf->liste_limit+1, $offset);
//print $sql;

$resql = $db->query($sql);
if ($resql)
{
	$num = $db->num_rows($resql);
	$i = 0;

	print_barre_liste($langs->trans("MenuOrdersToBill"), $page, $_SERVER["PHP_SELF"],"",$sortfield,$sortorder,'',$num);

	print '<form method="GET" action="'.$_SERVER["PHP_SELF"].'">';

	print '<table class="liste" width="100%">';
	print '<tr class="liste_titre">';

	print_liste_field_titre($langs->trans("Company"),$_SERVER["PHP_SELF"],"s.nom","","",'valign="center"',$sortfield,$sortorder);
	print_liste_field_titre($langs->trans("Town"),$_SERVER["PHP_SELF"],"s.ville","","",'valign="center"',$sortfield,$sortorder);
	print_liste_field_titre($langs->trans("CustomerCode"),$_SERVER["PHP_SELF"],"s.code_client","","",'align="left"',$sortfield,$sortorder);
	print_liste_field_titre($langs->trans("AccountancyCode"),$_SERVER["PHP_SELF"],"s.code_compta","","",'align="left"',$sortfield,$sortorder);
	print_liste_field_titre($langs->trans("DateCreation"),$_SERVER["PHP_SELF"],"datec",$addu,"",'align="right"',$sortfield,$sortorder);
	print "</tr>\n";

	// Lignes des champs de filtre
	print '<tr class="liste_titre">';

	print '<td align="left" class="liste_titre">';
	print '<input class="flat" type="text" name="search_nom" value="'.$_GET["search_nom"].'"></td>';

	print '<td class="liste_titre">&nbsp;</td>';

	print '<td align="left" class="liste_titre">';
	print '<input class="flat" type="text" size="10" name="search_code_client" value="'.$_GET["search_code_client"].'">';
	print '</td>';

	print '<td align="left" class="liste_titre">';
	print '<input class="flat" type="text" size="10" name="search_compta" value="'.$_GET["search_compta"].'">';
	print '</td>';

	print '<td align="right" colspan="2" class="liste_titre">';
	print '<input type="image" class="liste_titre" src="'.DOL_URL_ROOT.'/theme/'.$conf->theme.'/img/search.png" name="button_search" value="'.dol_escape_htmltag($langs->trans("Search")).'" title="'.dol_escape_htmltag($langs->trans("Search")).'">';
	print '</td>';
	print "</tr>\n";

	$var=True;

	while ($i < min($num,$conf->liste_limit))
	{
		$obj = $db->fetch_object($resql);

		$var=!$var;

		print "<tr $bc[$var]>";
		print '<td>';
		
        $result='';
        $lien=$lienfin='';
        $lien = '<a href="'.dol_buildpath('/commande/orderstoinvoice.php',1).'?socid='.$obj->rowid.'">';
        $lienfin='</a>';
        $name=$obj->nom;
        $result.=($lien.img_object($langs->trans("ShowCompany").': '.$name,'company').$lienfin);
        $result.=$lien.(dol_trunc($name,$maxlen)).$lienfin;
		
		print $result;
		print '</td>';
		print '<td>'.$obj->ville.'&nbsp;</td>';
		print '<td align="left">'.$obj->code_client.'&nbsp;</td>';
		print '<td align="left">'.$obj->code_compta.'&nbsp;</td>';
		print '<td align="right">'.dol_print_date($db->jdate($obj->datec)).'</td>';
		print "</tr>\n";
		$i++;
	}
	print "</table>";

	print '</form>';

	$db->free($resql);
}
else
{
	dol_print_error($db);
}

$db->close();

llxFooter();
?>
