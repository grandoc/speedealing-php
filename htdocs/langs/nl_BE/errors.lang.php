<?php
/* Copyright (C) 2012	Regis Houssin	<regis@dolibarr.fr>
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

$errors = array(
		'CHARSET' => 'UTF-8',
		'ErrorLoginAlreadyExists' => 'Inloggen %s bestaat reeds.',
		'ErrorGroupAlreadyExists' => 'Groep %s bestaat reeds.',
		'ErrorFailToDeleteFile' => 'Mislukt om bestand \'<b>%s</b>\' te verwijderen',
		'ErrorFailToCreateFile' => 'Mislukt om bestand \'<b>%s</b>\' te creëren',
		'ErrorFailToRenameDir' => 'Mislukt om directory \'<b>%s</b>\' in \'<b>%s</b>\' te hernoemen',
		'ErrorFailToCreateDir' => 'Mislukt om de directory \'<b>%s</b>\' te creëren',
		'ErrorFailToDeleteDir' => 'Mislukt om de directory \'<b>%s</b>\' te verwijderen',
		'ErrorFailedToDeleteJoinedFiles' => 'Kan niet verwijderen omdat bestanden gekoppeld zijn. Verwijder deze bestanden eerst.',
		'ErrorThisContactIsAlreadyDefinedAsThisType' => 'Deze contactpersoon is al omschreven als contactpersoon voor dit type.',
		'ErrorCashAccountAcceptsOnlyCashMoney' => 'Deze bankrekening is een KAS-rekening, zodat zij enkel betalingen in contanten (cash) aanvaard.',
		'ErrorFromToAccountsMustDiffers' => 'Bron en toegewezen bankrekeningen moet verschillend zijn.',
		'ErrorBadThirdPartyName' => 'Onjuiste waarde voor derden naam',
		'ErrorBadCustomerCodeSyntax' => 'Bad syntaxis voor klantcode',
		'ErrorCustomerCodeRequired' => 'Klantencode nodig',
		'ErrorCustomerCodeAlreadyUsed' => 'Klantencode al gebruikt',
		'ErrorPrefixRequired' => 'Prefix nodig',
		'ErrorBadSupplierCodeSyntax' => 'Slechte syntaxis voor Leverancierscode',
		'ErrorSupplierCodeRequired' => 'Leverancierscode nodig',
		'ErrorSupplierCodeAlreadyUsed' => 'Leverancierscode al gebruikt',
		'ErrorBadParameters' => 'Slechte parameters',
		'ErrorFailedToWriteInDir' => 'Mislukt om in de map %s te schrijven',
		'ErrorFoundBadEmailInFile' => 'Found incorrect email syntax for %s lines in file (example line %s with email=%s)',
		'ErrorUserCannotBeDelete' => 'User can not be deleted. May be it is associated on Dolibarr entities.',
		'ErrorUserCannotBeDelete' => 'Gebruiker kan niet worden verwijderd. Mag het is gekoppeld aan Dolibarr entiteiten.',
		'ErrorFieldsRequired' => 'Enkele verplichte velden zijn niet ingevuld.',
		'ErrorFailedToCreateDir' => 'Mislukt om een directory te creëren. Check that Web server user has permissions to write into Dolibarr documents directory. If parameter <b>safe_mode</b> is enabled on this PHP, check that Dolibarr php files owns to web server user (or group).',
		'ErrorNoMailDefinedForThisUser' => 'Geen mail gedefinieerd voor deze gebruiker',
		'ErrorFeatureNeedJavascript' => 'Javascript moet geactiveerd zijn voor deze functie. Verander dit in de setup - display.',
		'ErrorTopMenuMustHaveAParentWithId0' => 'A menu of type \'Top\' can\'t have a parent menu. Put 0 in parent menu or choose a menu of type \'Left\'.',
		'ErrorLeftMenuMustHaveAParentId' => 'A menu of type \'Left\' must have a parent id.',
		'ErrorFileNotFound' => 'Bestand niet gevonden (Slecht pad, verkeerde permissies of toegang geweigerd door openbasedir parameter)',
		'ErrorFunctionNotAvailableInPHP' => 'Functie <b>%s</b> is vereist voor deze toepassing, maar is niet beschikbaar in deze versie / setup van PHP.',
		'ErrorDirAlreadyExists' => 'Een map met deze naam bestaat al.',
		'ErrorFieldCanNotContainSpecialCharacters' => 'Veld <b>%s</b> mag geen speciale tekens bevat.',
		'WarningAllowUrlFopenMustBeOn' => 'Parameter <b>allow_url_fopen</b> must be set to <b>on</b> in filer <b>php.ini</b> for having this module working completely. U moet dit bestand handmatig wijzigen.',
		'WarningBuildScriptNotRunned' => 'Script <b>%s</b> was not yet ran to build graphics, or there is no data to show.',
		'WarningBookmarkAlreadyExists' => 'Een bladwijzer met deze titel of deze URL bestaat al.',
		'WarningPassIsEmpty' => 'Waarschuwing, database wachtwoord is leeg. Dit is een gat in de beveiliging. You should add a password to your database and change your conf.php file to reflect this.',
		'ErrorNoAccountancyModuleLoaded' => 'Geen "accountancy" module geactiveerd',
		'ErrorExportDuplicateProfil' => 'Deze profielnaam bestaat al voor deze export set.',
		'ErrorLDAPSetupNotComplete' => 'Dolibarr LDAP-matching is niet compleet.',
		'ErrorLDAPMakeManualTest' => 'A .ldif file has been generated in directory %s. Try to load it manually from command line to have more informations on errors.',
		'ErrorCantSaveADoneUserWithZeroPercentage' => 'Can\'t save an action with "statut not started" if field "done by" is also filled.',
		'ErrorRefAlreadyExists' => 'Ref gebruikt voor de oprichting bestaat al.',
		'ErrorPleaseTypeBankTransactionReportName' => 'Vul bankontvangst naam in waar transactie wordt gemeld (Formaat YYYYMM of JJJJMMDD)',
		'ErrorRecordHasChildren' => 'Mislukt om records te verwijderen omdat er nog gelinkte bestanden zijn.',
		'ErrorFailedToSendPassword' => 'Mislukt om wachtwoord te verzenden',
		'ErrorPasswordDiffers' => 'Wachtwoorden verschilt, typt u deze opnieuw.',
		'ErrorForbidden' => 'Toegang verboden. <br> U probeert toegang te krijgen tot een pagina of functie zonder in een geauthentiseerde sessie te gaan, of dat niet is toegestaan voor uw gebruikersaccount.',
		'ErrorForbidden2' => 'De machtigingen voor deze aanmelding kan worden verleend door de beheerder van Dolibarr via menu %s -> %s.',
		'ErrorForbidden3' => 'Dolibarr lijkt niet te werken binnen een geauthentiseerde sessie. Raadpleeg de installatie documentatie voor Dolibarr over hoe de authenticatie te beheren (htaccess, mod_auth of andere ...).',
		'ErrorNoImagickReadimage' => 'Imagick_readimage functie is niet aanwezig in deze installatie van PHP. De samenvatting is niet beschikbaar. Beheerders kunnen dit uitschakelen via het menu Opstelling - Grafische Instellingen.',
		'ErrorRecordAlreadyExists' => 'Record bestaat al',
		'ErrorCantReadFile' => 'Mislukt om bestand \'%s\' te lezen',
		'ErrorCantReadDir' => 'Mislukt om directorie \'%s\' te lezen',
		'ErrorFailedToFindEntity' => 'Mislukt om entiteit \'%s\' te lezen',
		'ErrorBadLoginPassword' => 'Onjuiste waarde voor login of wachtwoord',
		'ErrorLoginDisabled' => 'Uw account is uitgeschakeld',
		'ErrorFailedToRunExternalCommand' => 'Failed to run external command. Check it is available and runnable by your PHP server. If PHP <b>Safe Mode</b> is enabled, check that command is inside a directory defined by parameter <b>safe_mode_exec_dir</b>.',
		'ErrorFailedToChangePassword' => 'Mislukt om wachtwoord te wijzigen',
		'ErrorLoginDoesNotExists' => 'Gebruiker met login <b>%s</b> kon niet worden gevonden.',
		'ErrorLoginHasNoEmail' => 'Deze gebruiker heeft geen e-mail adres. Proces afgebroken.',
		'ErrorBadValueForCode' => 'Slechte waarde voor de input-code. Probeer het opnieuw met een nieuwe waarde ...',
		'ErrorFileIsInfectedWith' => 'Dit bestand is geïnfecteerd met %s',
		'WarningInstallDirExists' => 'Waarschuwing, install directorie (%s) bestaat nog steeds. Dit is een ernstig beveiligingslek. U moet deze zo spoedig mogelijk verwijderen.',
		'WarningUntilDirRemoved' => 'Deze waarschuwing zal actief blijven zolang deze map aanwezig is (alleen weergegeven voor admin-gebruikers).WarningInstallDirExists=Waarschuwing, install directorie (%s) bestaat nog steeds. Dit is een ernstig beveiligingslek. U moet deze zo spoedig mogelijk verwijderen.',
);
?>