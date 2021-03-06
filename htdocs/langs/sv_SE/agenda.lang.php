<?php
/* Copyright (C) 2012	Regis Houssin	<regis.houssin@capnetworks.com>
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

$agenda = array(
		'CHARSET' => 'UTF-8',
		'Actions' => 'Åtgärder',
		'ActionsArea' => 'Åtgärder område (händelser och uppgifter)',
		'Agenda' => 'Agenda',
		'Agendas' => 'Dagordningar',
		'Calendar' => 'Kalender',
		'Calendars' => 'Kalendrar',
		'LocalAgenda' => 'Lokal kalender',
		'AffectedTo' => 'Påverkas i',
		'DoneBy' => 'Utfärdat av',
		'Events' => 'Evenemang',
		'MyEvents' => 'Mina aktiviteter',
		'OtherEvents' => 'Övriga händelser',
		'ListOfActions' => 'Lista över evenemang',
		'Location' => 'Läge',
		'EventOnFullDay' => 'Händelse heldag',
		'SearchAnAction' => 'Sök en handling / uppgift',
		'MenuToDoActions' => 'Alla ofullständiga handlingar',
		'MenuDoneActions' => 'Alla avslutade åtgärder',
		'MenuToDoMyActions' => 'Min ofullständiga handlingar',
		'MenuDoneMyActions' => 'Min avslutas åtgärder',
		'ListOfEvents' => 'Lista över Dolibarr händelser',
		'ActionsAskedBy' => 'Åtgärder som registrerats av',
		'ActionsToDoBy' => 'Åtgärder påverkas',
		'ActionsDoneBy' => 'Åtgärder som utförs av',
		'AllMyActions' => 'Alla mina handlingar och uppgifter',
		'AllActions' => 'Alla åtgärder / uppgifter',
		'ViewList' => 'Visa lista',
		'ViewCal' => 'Visa kalender',
		'ViewDay' => 'Dagsvy',
		'ViewWeek' => 'Veckovy',
		'ViewWithPredefinedFilters' => 'Visa med fördefinierade filter',
		'AutoActions' => 'Automatisk fyllning av dagordning',
		'AgendaAutoActionDesc' => 'Här definierar du händelser som du vill Dolibarr att automatiskt skapa en talan i dagordningen. Om ingenting är markerad (som standard), kommer endast manuella, skall ingå i dagordningen.',
		'AgendaSetupOtherDesc' => 'Denna sida tillåter dig att ändra andra parametrar i dagordningen modul.',
		'AgendaExtSitesDesc' => 'Den här sidan gör det möjligt att deklarera externa kalendrar för att se sina evenemang i Dolibarr agenda.',
		'ActionsEvents' => 'Händelser som Dolibarr kommer att skapa en talan i agenda automatiskt',
		'PropalValidatedInDolibarr' => 'Förslag %s validerade',
		'InvoiceValidatedInDolibarr' => 'Faktura %s validerade',
		'InvoiceBackToDraftInDolibarr' => 'Faktura %s gå tillbaka till förslaget status',
		'OrderValidatedInDolibarr' => 'Beställ %s validerade',
		'OrderApprovedInDolibarr' => 'Ordningens %s godkänd',
		'OrderBackToDraftInDolibarr' => 'Beställ %s gå tillbaka till förslaget status',
		'OrderCanceledInDolibarr' => 'Beställ %s avbryts',
		'InterventionValidatedInDolibarr' => 'Intervention %s validerade',
		'ProposalSentByEMail' => 'Kommersiella förslag %s via e-post',
		'OrderSentByEMail' => 'Kundorderprojekt %s via e-post',
		'InvoiceSentByEMail' => 'Kundfaktura %s via e-post',
		'SupplierOrderSentByEMail' => 'Leverantör beställa %s via e-post',
		'SupplierInvoiceSentByEMail' => 'Leverantörsfaktura %s via e-post',
		'ShippingSentByEMail' => 'Frakt %s via e-post',
		'InterventionSentByEMail' => 'Intervention %s via e-post',
		'NewCompanyToDolibarr' => 'Tredje part har skapats',
		'DateActionPlannedStart' => 'Planerat startdatum',
		'DateActionPlannedEnd' => 'Planerat slutdatum',
		'DateActionDoneStart' => 'Real startdatum',
		'DateActionDoneEnd' => 'Real slutdatum',
		'DateActionStart' => 'Startdatum',
		'DateActionEnd' => 'Slutdatum',
		'AgendaUrlOptions1' => 'Du kan också lägga till följande parametrar för att filtrera utgång:',
		'AgendaUrlOptions2' => '<b>login = %s</b> att begränsa produktionen till åtgärder inrättade av, påverkas eller göras av användaren <b>%s.</b>',
		'AgendaUrlOptions3' => '<b>logina = %s</b> att begränsa produktionen till åtgärder som skapats av användaren <b>%s.</b>',
		'AgendaUrlOptions4' => '<b>logint = %s</b> att begränsa produktionen till handlande påverkade användarnas <b>%s.</b>',
		'AgendaUrlOptions5' => '<b>logind = %s</b> att begränsa produktionen till åtgärder som utförts av användaren <b>%s.</b>',
		'AgendaShowBirthdayEvents' => 'Visa födelsedag kontakter',
		'AgendaHideBirthdayEvents' => 'Dölj födelsedag kontakter',
		'Event' => 'Événement',
		'Activities' => 'Tâches/activités',
		'NewActions' => 'Nouvelles<br>actions',
		'DoActions' => 'Actions<br>en cours',
		'SumMyActions' => 'Actions réalisées<br>par moi cette année',
		'SumActions' => 'Actions au total<br>cette année',
		'DateEchAction' => 'Date d\'échéance',
		'StatusActionTooLate' => 'Action en retard',
		'MyTasks' => 'Mes tâches',
		'MyDelegatedTasks' => 'Mes tâches déléguées',
		'ProdPlanning' => 'Planning de production',
		// External Sites ical
		'ExportCal' => 'Export kalender',
		'ExtSites' => 'Importera externa kalendrar',
		'ExtSitesEnableThisTool' => 'Visa externa kalendrar till dagordning',
		'ExtSitesNbOfAgenda' => 'Antal kalendrar',
		'AgendaExtNb' => 'Kalender nb %s',
		'ExtSiteUrlAgenda' => 'URL att komma åt. Ical-fil',
		'ExtSiteNoLabel' => 'Ingen beskrivning'
);
?>