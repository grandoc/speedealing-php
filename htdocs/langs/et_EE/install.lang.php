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

$install = array(
		'CHARSET' => 'UTF-8',
		'InstallEasy' => 'Lihtsalt järgige samm-sammult.',
		'MiscellanousChecks' => 'Eeldused kontrollida',
		'DolibarrWelcome' => 'Tere tulemast Dolibarr',
		'ConfFileExists' => 'Konfiguratsioonifaili <b>%s</b> olemas.',
		'ConfFileDoesNotExists' => 'Konfiguratsioonifaili <b>%s</b> ei eksisteeri!',
		'ConfFileDoesNotExistsAndCouldNotBeCreated' => 'Konfiguratsioonifaili <b>%s</b> ei ole ja ei saa luua!',
		'ConfFileCouldBeCreated' => 'Konfiguratsioonifaili <b>%s</b> võiks luua.',
		'ConfFileIsNotWritable' => 'Konfiguratsioonifaili <b>%s</b> ei ole kirjutatav. Vaata õigusi. Sest 1. install, veebi server tuleb anda, et oleks võimalik kirjutada seda pilti jooksul konfiguratsiooni protsessi (&quot;chmod 666&quot; näiteks Unix nagu OS).',
		'ConfFileIsWritable' => 'Konfiguratsioonifaili <b>%s</b> on kirjutatav.',
		'ConfFileReload' => 'Värskenda kõik informatsiooni konfiguratsioonifaili.',
		'PHPSupportSessions' => 'See PHP toetab istungid.',
		'PHPSupportPOSTGETOk' => 'See PHP toetab muutujaid POST ja GET.',
		'PHPSupportPOSTGETKo' => 'On võimalik oma PHP setup ei toeta muutujaid POST ja / või saada. Kontrolli oma parameeter <b>variables_order</b> in php.ini.',
		'PHPSupportGD' => 'See PHP tugi GD graafiline funktsioone.',
		'PHPSupportUTF8' => 'See PHP tugi UTF8 funktsioone.',
		'PHPMemoryOK' => 'Sinu PHP max sessiooni mälu on seatud <b>%s.</b> See peaks olema piisav.',
		'PHPMemoryTooLow' => 'Sinu PHP max sessiooni mälu on seatud <b>%s</b> bytes. See peaks olema liiga madal. Muuda oma <b>php.ini</b> määrata <b>memory_limit</b> parameeter vähemalt <b>%s</b> bytes.',
		'Recheck' => 'Vajuta siia rohkem significative test',
		'ErrorPHPDoesNotSupportSessions' => 'Sinu PHP paigaldus ei toeta istungid. See funktsioon on kohustatud tegema Dolibarr töö. Kontrollige oma PHP setup.',
		'ErrorPHPDoesNotSupportGD' => 'Sinu PHP paigaldus ei toeta graafiline funktsiooni GD. Ei graafik on kättesaadav.',
		'ErrorPHPDoesNotSupportUTF8' => 'Sinu PHP paigaldus ei toeta UTF8 funktsioone. Dolibarr ei toimi korralikult. Lahenda see enne paigaldamist Dolibarr.',
		'ErrorDirDoesNotExists' => 'Directory %s ei ole olemas.',
		'ErrorGoBackAndCorrectParameters' => 'Mine tagasi ja parandada valesti parameetrid.',
		'ErrorWrongValueForParameter' => 'Teil võib olla kirjutatud vale hinna parameeter &quot;%s&quot;.',
		'ErrorFailedToCreateDatabase' => 'Suutnud luua andmebaasi \'%s &quot;.',
		'ErrorFailedToConnectToDatabase' => 'Ei suutnud ühendada andmebaas &quot;%s&quot;.',
		'ErrorDatabaseVersionTooLow' => 'Database version (%s) too old. Version %s or higher is required.',
		'ErrorPHPVersionTooLow' => 'PHP versioon liiga vana. Version %s on vaja.',
		'WarningPHPVersionTooLow' => 'PHP versioon liiga vana. Version %s või rohkem oodata. See versioon peaks võimaldama paigaldada, kuid ei toetata.',
		'ErrorConnectedButDatabaseNotFound' => 'Ühendus server eduka kuid andmebaas &quot;%s&quot; ei leitud.',
		'ErrorDatabaseAlreadyExists' => 'Database \'%s &quot;juba olemas.',
		'IfDatabaseNotExistsGoBackAndUncheckCreate' => 'Kui andmebaas ei ole, tagasi minna ja kontrollida option &quot;luua andmebaas&quot;.',
		'IfDatabaseExistsGoBackAndCheckCreate' => 'Kui andmebaas on juba olemas, mine tagasi ja lülita &quot;Loo andmebaas&quot; variant.',
		'WarningBrowserTooOld' => 'Liiga vana versiooni brauserist. Brauseri uuendamine, et uuem versioon Firefox, Chrome või Opera on väga soovitatud,.',
		'PHPVersion' => 'PHP Version',
		'YouCanContinue' => 'Võite jätkata ...',
		'PleaseBePatient' => 'Palun ole kannatlik ...',
		'License' => 'Kasutades litsentsi',
		'ConfigurationFile' => 'Konfiguratsioonifaili',
		'WebPagesDirectory' => 'Kataloog, kus veebilehti on salvestatud',
		'DocumentsDirectory' => 'Directory salvestada üles ja loodud dokumentide',
		'URLRoot' => 'URL Root',
		'ForceHttps' => 'Sundida turvalise ühenduse (https)',
		'CheckToForceHttps' => 'Vaata seda võimalust, et sundida turvalised ühendused (https). <br> See eeldab, et veebiserver on konfigureeritud SSL sertifikaat.',
		'DolibarrDatabase' => 'Dolibarr Database',
		'DatabaseChoice' => 'Database valik',
		'DatabaseType' => 'Andmebaasi tüüp',
		'DriverType' => 'Juhi tüüp',
		'Server' => 'Server',
		'ServerAddressDescription' => 'Nime või ip aadressi andmebaasi server, tavaliselt \'localhost\', kui andmebaasi server on majutatud sama server kui veebiserver',
		'ServerPortDescription' => 'Database server port. Pea tühi, kui teadmata.',
		'DatabaseServer' => 'Database server',
		'DatabaseName' => 'Andmebaasi nimi',
		'DatabasePrefix' => 'Database eesliide tabelile',
		'Login' => 'Logi',
		'AdminLogin' => 'Logi sisse jaoks Dolibarr andmebaasi omanik.',
		'Password' => 'Parool',
		'PasswordAgain' => 'Korda parool teist korda',
		'AdminPassword' => 'Parooli Dolibarr andmebaasi omanik.',
		'CreateDatabase' => 'Loo andmebaas',
		'CreateUser' => 'Loo omanik',
		'DatabaseSuperUserAccess' => 'Database server - administraatorina ligipääs',
		'CheckToCreateDatabase' => 'Ruut, kui andmebaasi ei eksisteeri ja tuleb luua. <br> Sellisel juhul peate täitma login / parool administraatori konto alt selle lehe.',
		'CheckToCreateUser' => 'Ruut, kui andmebaasi omanik ei ole ja tuleb luua. <br> Sel juhul tuleb valida oma kasutajanimi ja parool ning täita ka login / parool administraatori konto alt selle lehe. Kui see kast on märkimata, omanik andmebaas ja paroolid peavad olemas.',
		'Experimental' => '(Experimental)',
		'DatabaseRootLoginDescription' => 'Logi sisse kasutaja lubatud luua uusi andmebaase ja uued kasutajad, kasutu, kui teie andmebaas ja oma andmebaasi login on juba olemas (nt kui oled võõrustajaks web hosting pakkuja).',
		'KeepEmptyIfNoPassword' => 'Jätke tühjaks, kui kasutaja ei ole salasõna (vältida)',
		'SaveConfigurationFile' => 'Salvesta väärtused',
		'ConfigurationSaving' => 'Salvestamine konfiguratsioonifaili',
		'ServerConnection' => 'Serveriühendus',
		'DatabaseConnection' => 'Andmebaasi ühendus',
		'DatabaseCreation' => 'Andmebaasi loomine',
		'UserCreation' => 'Kasutaja loomine',
		'CreateDatabaseObjects' => 'Andmebaasi objektide loomine',
		'ReferenceDataLoading' => 'Viiteandmed laadimise',
		'TablesAndPrimaryKeysCreation' => 'Lauad ja Esmane võtmete loomine',
		'CreateTableAndPrimaryKey' => 'Loo tabel %s',
		'CreateOtherKeysForTable' => 'Loo välismaa võtmed ja indeksid laua %s',
		'OtherKeysCreation' => 'Välismaa võtmed ja indeksid loomine',
		'FunctionsCreation' => 'Funktsioonid loomine',
		'AdminAccountCreation' => 'Administraator login loomine',
		'PleaseTypePassword' => 'Palun sisesta parool, tühjad paroolid ei ole lubatud!',
		'PleaseTypeALogin' => 'Palun trükkige login!',
		'PasswordsMismatch' => 'Paroolid on erinev, palun proovi uuesti!',
		'SetupEnd' => 'End of setup',
		'SystemIsInstalled' => 'See on installeerimine lõpetatud.',
		'SystemIsUpgraded' => 'Dolibarr on uuendatud edukalt.',
		'YouNeedToPersonalizeSetup' => 'Te peate konfigureerima Dolibarr oma vajadustele (välimus, funktsioonid, ...). Selleks, järgige linki:',
		'AdminLoginCreatedSuccessfuly' => 'Dolibarr administraator login <b>&quot;%s&quot;</b> loodud successfuly.',
		'GoToDolibarr' => 'Mine Dolibarr',
		'GoToSetupArea' => 'Mine Dolibarr (setup ala)',
		'MigrationNotFinished' => 'Versiooni oma andmebaasi ei ole täiesti ajakohane, et sa pead jooksma upgrade protsessi uuesti.',
		'GoToUpgradePage' => 'Mine uuendada lehte uuesti',
		'Examples' => 'Näited',
		'WithNoSlashAtTheEnd' => 'Ilma kaldkriips &quot;/&quot; lõpus',
		'DirectoryRecommendation' => 'On soovitatud, et kasutada kataloog väljaspool oma kataloogi oma veebilehekülgedele.',
		'LoginAlreadyExists' => 'On juba olemas',
		'DolibarrAdminLogin' => 'Dolibarr admin login',
		'AdminLoginAlreadyExists' => 'Dolibarr administraatori konto <b>%s</b> &quot;juba olemas. Mine tagasi, kui soovite luua veel üks.',
		'WarningRemoveInstallDir' => 'Hoiatus turvalisuse huvides, kui install või uuendus on lõpule jõudnud, siis tuleb eemaldada <b>install kataloogi või lisada faili nimega install.lock sisse Dolibarr dokumendi kataloogi, et vältida pahatahtlike kasutada.</b>',
		'ThisPHPDoesNotSupportTypeBase' => 'See PHP ei toeta ühtegi liidest juurdepääs andmebaasi tüüp %s',
		'FunctionNotAvailableInThisPHP' => 'Ole saadaval sel PHP',
		'MigrateScript' => 'Rände script',
		'ChoosedMigrateScript' => 'Vali rände script',
		'DataMigration' => 'Andmete migratsioon',
		'DatabaseMigration' => 'Struktuur andmebaasi migratsioon',
		'ProcessMigrateScript' => 'Script töötlemine',
		'ChooseYourSetupMode' => 'Vali oma setup mode ja vajuta &quot;Start&quot; ...',
		'FreshInstall' => 'Värske install',
		'FreshInstallDesc' => 'Kasutage seda režiimi, kui see on su esimene install. Kui ei, siis selles režiimis saab remondi puudulik eelmine install, kuid kui soovite, et täiustada oma versioon, vali &quot;Upgrade&quot; režiimis.',
		'Upgrade' => 'Uuenda',
		'UpgradeDesc' => 'Kasutage seda režiimi, kui olete asendada vana Dolibarr faile faile uuem versioon. See täiustada oma andmebaasi ning andmeid.',
		'Start' => 'Algus',
		'InstallNotAllowed' => 'Setup ei lubatud <b>conf.php</b> õigusi',
		'NotAvailable' => 'Pole saadaval',
		'YouMustCreateWithPermission' => 'Peate looma fail %s ning määrata kirjutada õigusi seda veebiserveri ajal install protsessi.',
		'CorrectProblemAndReloadPage' => 'Palun probleemi lahendada ja vajutage F5 uuesti laadida lehelt.',
		'AlreadyDone' => 'Juba rännanud',
		'DatabaseVersion' => 'Database versiooni',
		'ServerVersion' => 'Database server version',
		'YouMustCreateItAndAllowServerToWrite' => 'Peate looma selle kataloogi ning võimaldab veebiserveri kirjutada sinna.',
		'CharsetChoice' => 'Kooditabel valik',
		'CharacterSetClient' => 'Märgistikku kasutatakse genereeritud HTML veebilehti',
		'CharacterSetClientComment' => 'Vali kooditabel web ekraanil. <br/> Vaikimisi pakutud kooditabel on üks teie andmebaasi.',
		'CollationConnection' => 'Iseloom sorteerimine et',
		'CollationConnectionComment' => 'Vali lehekülg kood, mis määratleb tegelase sorteerimine et kasutada andmebaasi. Seda parameetrit nimetatakse ka &quot;võrdlemine&quot;, mida mõned andmebaase. <br/> Seda parameetrit ei ole võimalik määratleda, kui andmebaas on juba olemas.',
		'CharacterSetDatabase' => 'Kooditabel andmebaasi',
		'CharacterSetDatabaseComment' => 'Vali kooditabel otsitakse andmebaasi loomist. <br/> Seda parameetrit ei ole võimalik määratleda, kui andmebaas on juba olemas.',
		'YouAskDatabaseCreationSoDolibarrNeedToConnect' => 'Te küsite, et luua andmebaas <b>%s,</b> kuid selleks, Dolibarr vaja ühendada server <b>%s</b> super kasutaja <b>%s</b> õigused.',
		'YouAskLoginCreationSoDolibarrNeedToConnect' => 'Te küsite, et luua andmebaas login <b>%s,</b> kuid selleks, Dolibarr vaja ühendada server <b>%s</b> super kasutaja <b>%s</b> õigused.',
		'BecauseConnectionFailedParametersMayBeWrong' => 'Nagu ühenduse saamine ebaõnnestus, host või super kasutaja parameetrid peavad olema vale.',
		'OrphelinsPaymentsDetectedByMethod' => 'Orvud makse avastatud meetodit %s',
		'RemoveItManuallyAndPressF5ToContinue' => 'Eemaldada käsitsi ja vajutage F5 jätkata.',
		'KeepDefaultValuesWamp' => 'Kasutage Dolibarr seadistusviisard alates DoliWamp, nii väärtuste pakutud siin juba optimeeritud. Neid muuta ainult siis, kui sa tead, mida sa teed.',
		'KeepDefaultValuesDeb' => 'Kasutage Dolibarr seadistusviisard alates Linux paketi (Ubuntu, Debian, Fedora ...), nii et väärtused pakutud siin juba optimeeritud. Ainult parooli andmebaasi omanik loomiseks tuleb lõpule viia. Teiste parameetrite muutmine ainult siis, kui sa tead, mida sa teed.',
		'KeepDefaultValuesMamp' => 'Kasutage Dolibarr seadistusviisard alates DoliMamp, nii väärtuste pakutud siin juba optimeeritud. Neid muuta ainult siis, kui sa tead, mida sa teed.',
		'KeepDefaultValuesProxmox' => 'Kasutage Dolibarr seadistusviisard alates ELFA virtuaalne seade, seega väärtused pakutud siin juba optimeeritud. Neid muuta ainult siis, kui sa tead, mida sa teed.',
		'FieldRenamed' => 'Field ümber',
		'IfLoginDoesNotExistsCheckCreateUser' => 'Kui login ei eksisteeri veel, siis peab kontrollima valik &quot;Create user&quot;',
		'ErrorConnection' => 'Server <b>&quot;%s&quot;</b> andmebaasi nimi <b>&quot;%s&quot;</b> login <b>&quot;%s&quot;</b> või andmebaasi parool võib olla vale või PHP klient versioon võib olla liiga vana võrreldes andmebaasi versiooni.',
		'InstallChoiceRecommanded' => 'Soovitatav valik paigaldada versioon <b>%s</b> oma praeguse versiooni <b>%s</b>',
		'InstallChoiceSuggested' => '<b>Installi valik soovitas paigaldaja.</b>',
		'MigrateIsDoneStepByStep' => 'Suunatud versioon (%s) on vahe mitu versiooni, nii Install Wizard naaseb soovitan järgmist rände kui see valmib.',
		'CheckThatDatabasenameIsCorrect' => 'Kontrollige, et andmebaasi nimi <b>&quot;%s&quot;</b> on õige.',
		'IfAlreadyExistsCheckOption' => 'Kui see nimi on õige ja mis andmebaasis veel ei ole, siis tuleb kontrollida option &quot;luua andmebaas&quot;.',
		'OpenBaseDir' => 'PHP openbasedir parameeter',
		'YouAskToCreateDatabaseSoRootRequired' => 'Teil olev kast &quot;Loo andmebaas&quot;. Selleks peate esitama login / parool root (põhja vorm).',
		'YouAskToCreateDatabaseUserSoRootRequired' => 'Sa kontrollitud kasti &quot;Create andmebaasi omanik.&quot; Selleks peate esitama login / parool root (põhja vorm).',
		'NextStepMightLastALongTime' => 'Praegune samm võib kesta mitu minutit. Palun oodake kuni järgmise ekraanil kuvatakse täielikult enne jätkamist.',
		'MigrationCustomerOrderShipping' => 'Rändavad laevanduse klientide tellimused ladustamine',
		'MigrationShippingDelivery' => 'Upgrade ladustamiseks laevandus',
		'MigrationShippingDelivery2' => 'Upgrade ladustamiseks shipping 2',
		'MigrationFinished' => 'Ränne lõppenud',
		'LastStepDesc' => '<strong>Viimane samm:</strong> Määra siin kasutajanimi ja parool te kavatsete kasutada ühenduda tarkvara. Ära kaota seda on konto haldab kõiki teisi.',
		'ActivateModule' => 'Aktiveerige moodul %s',
		'ShowEditTechnicalParameters' => 'Click here to show/edit advanced parameters (expert mode)',
		'ServerPortCouchdbDescription' => 'Port du serveur. Défaut 5984.',
		'ServerAddressCouchdbDescription' => 'Nom FQDN du serveur de base de données, \'localhost.localdomain\' quand le serveur est installé sur la même machine que le serveur web',
		'DatabaseCouchdbUserDescription' => 'Login du super administrateur ayant tous les droits sur le serveur CouchDB ou l\'administrateur propriétaire de la base si la base et son compte d\'accès existent déjà (comme lorsque vous êtes chez un hébergeur).<br><br><div class="alert-box info">Cet utilisateur/mot de passe sera l\'administrateur pour se connecter à Speedealing.</div>',
		'CheckToCreateCouchdbDatabase' => 'Cochez cette option si la base de données n\'existe pas et doit être créée.',
		'CreateAdminUser' => 'Créer le super administrateur (Première installation de couchDB)',
		'MemcachedDescription' => 'Activer Memcached necessite l\'installation d\'un serveur Memcached et des lib php-memcached ou php-memcache. Il peut être activer après l\'installation.',
		'ServerAddressMemcachedDesc' => 'Nom ou adresse ip du serveur memcached, généralement \'localhost\' quand le serveur est installé sur la même machine que le serveur web',
		'ServerPortMemcachedDesc' => 'Port du serveur memcached. Défaut : 11211',
		'EnabledMemcached' => 'Activer Memcached',
		'DatabaseNoSQL' => 'Base de données CouchDB',
		'DatabaseSQL' => 'Base de données SQL',
		'FailedToCreateAdminLogin' => 'Echec de la création du compte administrateur Speedealing.',
		'LinkedElementsInvalidDeleted' => '<b>%s</b> liaisons invalides ont été supprimées',
		'NothingToDelete' => 'Aucune liaison invalide trouvée',
		'SourceType' => 'Source',
		'TargetType' => 'Cible',
		'MigrationContractsEmptyCreationDatesUpdateSuccess' => 'Ok pour date création',
		//////////////////
		// upgrade
		//////////////////
		'MigrationFixData' => 'Määrama denormalized andmed',
		'MigrationOrder' => 'Andmed migratsiooni kliendi korralduste',
		'MigrationSupplierOrder' => 'Andmed migratsiooni tarnija tellimuste',
		'MigrationProposal' => 'Andmete migratsioon kommertseesmärkidel ettepanekuid',
		'MigrationInvoice' => 'Andmed migratsiooni kliendi arved',
		'MigrationContract' => 'Andmete migratsioon lepingute',
		'MigrationSuccessfullUpdate' => 'Upgrade edukas',
		'MigrationUpdateFailed' => 'Ebaõnnestunud uuendamise protsess',
		'MigrationRelationshipTables' => 'Andmed rände suhte tabelid (%s)',
		'MigrationPaymentsUpdate' => 'Makse andmete parandus',
		'MigrationPaymentsNumberToUpdate' => '%s makse (d) ajakohastama',
		'MigrationProcessPaymentUpdate' => 'Uuenda makse (te) %s',
		'MigrationPaymentsNothingToUpdate' => 'Mitte rohkem asju teha',
		'MigrationPaymentsNothingUpdatable' => 'Mitte maksta, mida saab korrigeerida',
		'MigrationContractsUpdate' => 'Leping andmete parandamine',
		'MigrationContractsNumberToUpdate' => '%s lepingu (te) ajakohastada',
		'MigrationContractsLineCreation' => 'Loo lepingu rida lepingu ref %s',
		'MigrationContractsNothingToUpdate' => 'Mitte rohkem asju teha',
		'MigrationContractsFieldDontExist' => 'Field fk_facture ei eksisteeri enam. Midagi teha.',
		'MigrationContractsEmptyDatesUpdate' => 'Leping tühi kuupäeva korrigeerimine',
		'MigrationContractsEmptyDatesUpdateSuccess' => 'Leping emtpy kuupäeva paranduse teinud successfuly',
		'MigrationContractsEmptyDatesNothingToUpdate' => 'Ole lepingut tühi kuupäeva korrigeerimiseks',
		'MigrationContractsEmptyCreationDatesNothingToUpdate' => 'Ole lepingut loomise kuupäeva korrigeerimiseks',
		'MigrationContractsInvalidDatesUpdate' => 'Bad väärtuspäeval lepingu parandus',
		'MigrationContractsInvalidDateFix' => 'Korrektne leping %s (Lepingu date = %s, Alates kasutuselevõtu kuupäev min = %s)',
		'MigrationContractsInvalidDatesNumber' => '%s lepingute muutmine',
		'MigrationContractsInvalidDatesNothingToUpdate' => 'Ei kuupäeva halb väärtuse korrigeerimiseks',
		'MigrationContractsIncoherentCreationDateUpdate' => 'Bad väärtus lepingu loomise kuupäeva korrigeerimine',
		'MigrationContractsIncoherentCreationDateUpdateSuccess' => 'Bad väärtus lepingu loomise kuupäeva paranduse teinud succesfuly',
		'MigrationContractsIncoherentCreationDateNothingToUpdate' => 'Ei ole halb raha lepingu loomise kuupäeva korrigeerimiseks',
		'MigrationReopeningContracts' => 'Avatud leping lõpetati viga',
		'MigrationReopenThisContract' => 'Uuesti lepingu %s',
		'MigrationReopenedContractsNumber' => '%s lepingute muutmine',
		'MigrationReopeningContractsNothingToUpdate' => 'Ei suletud leping avada',
		'MigrationBankTransfertsUpdate' => 'Uuenda seoseid pank tehingu ja pangaülekandega',
		'MigrationBankTransfertsNothingToUpdate' => 'Kõik lingid on ajakohane',
		'MigrationShipmentOrderMatching' => 'Edastuste kätte uuendus',
		'MigrationDeliveryOrderMatching' => 'Toimetaja kätte uuendus',
		'MigrationDeliveryDetail' => 'Toimetaja uuendus',
		'MigrationStockDetail' => 'Uuenda varu toodete väärtus',
		'MigrationMenusDetail' => 'Värskenda dünaamilised menüü tabelid',
		'MigrationDeliveryAddress' => 'Uuenda kohaletoimetamise aadress saadetiste',
		'MigrationProjectTaskActors' => 'Andmed migratsiooni llx_projet_task_actors tabel',
		'MigrationProjectUserResp' => 'Andmed migratsiooni valdkonnas fk_user_resp of llx_projet et llx_element_contact',
		'MigrationProjectTaskTime' => 'Värskenda aega sekundites',
		'MigrationActioncommElement' => 'Värskenda andmed meetmete kohta',
		'MigrationPaymentMode' => 'Andmete migratsioon maksmise režiim',
		'MigrationCategorieAssociation' => 'Migration of categories'
);
?>