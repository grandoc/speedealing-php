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

$users = array(
		'CHARSET' => 'UTF-8',
		'UserCard' => 'Kartica uporabnika',
		'ContactCard' => 'Kartica kontakta',
		'GroupCard' => 'Kartica skupine',
		'NoContactCard' => 'Ni kartice med kontakti',
		'Permission' => 'Dovoljenje',
		'Permissions' => 'Dovoljenja',
		'EditPassword' => 'Spremeni geslo',
		'SendNewPassword' => 'Regeneriraj in pošlji geslo',
		'ReinitPassword' => 'Regeneriraj geslo',
		'PasswordChangedTo' => 'Geslo spremenjeno v: %s',
		'SubjectNewPassword' => 'Vaše novo geslo za Dolibarr',
		'AvailableRights' => 'Dovoljenja, ki so na voljo',
		'OwnedRights' => 'Lastna dovoljenja',
		'GroupRights' => 'Dovoljenja skupine',
		'UserRights' => 'Dovoljenja uporabnika',
		'UserGUISetup' => 'Nastavitev zaslona uporabnika',
		'DisableUser' => 'Onemogoči',
		'DisableAUser' => 'Onemogoči',
		'DeleteUser' => 'Izbriši',
		'DeleteAUser' => 'Izbriši uporabnika',
		'DisableGroup' => 'Onemogoči',
		'DisableAGroup' => 'Onemogoči skupino',
		'EnableAUser' => 'Omogoči uporabnika',
		'EnableAGroup' => 'Omogoči skupino',
		'DeleteGroup' => 'Izbriši',
		'DeleteAGroup' => 'Izbriši skupino',
		'ConfirmDisableUser' => 'Ali zares želite onemogočiti uporabnika <b>%s</b> ?',
		'ConfirmDisableGroup' => 'Ali zares želite onemogočiti skupino <b>%s</b> ?',
		'ConfirmDeleteUser' => 'Ali zares želite izbrisati uporabnika <b>%s</b> ?',
		'ConfirmDeleteGroup' => 'Ali zares želite izbrisati skupino <b>%s</b> ?',
		'ConfirmEnableUser' => 'Ali zares želite omogočiti uporabnika <b>%s</b> ?',
		'ConfirmEnableGroup' => 'Ali zares želite omogočiti skupino <b>%s</b> ?',
		'ConfirmReinitPassword' => 'Ali zares želite generirati novo geslo za uporabnika <b>%s</b> ?',
		'ConfirmSendNewPassword' => 'Ali zares želite generirati in poslati novo geslo za uporabnika <b>%s</b> ?',
		'NewUser' => 'Nov uporabnik',
		'CreateUser' => 'Kreiraj uporabnika',
		'SearchAGroup' => 'Išči skupino',
		'SearchAUser' => 'Išči uporabnika',
		'ErrorFailedToSendPassword' => 'Napaka pri pošiljanju gesla',
		'LoginNotDefined' => 'Uporabniško ime ni določeno.',
		'NameNotDefined' => 'Ime ni določeno.',
		'ListOfUsers' => 'Seznam uporabnikov',
		'Administrator' => 'Administrator',
		'SuperAdministrator' => 'Super Administrator',
		'SuperAdministratorDesc' => 'Administrator z vsemi pravicami',
		'AdministratorDesc' => 'Entiteta administratorja',
		'DefaultRights' => 'Privzeta dovoljenja',
		'DefaultRightsDesc' => 'Tukaj določite <u>privzeta</u> dovoljenja, ki se avtomatsko dodelijo <u>novo kreiranemu</u> uporabniku (Dovoljenja obstoječega uporabnika spremenite preko kartice uporabnika).',
		'DolibarrUsers' => 'Dolibarr uporabniki',
		'LastName' => 'Priimek',
		'FirstName' => 'Ime',
		'ListOfGroups' => 'Seznam skupin',
		'NewGroup' => 'Nova skupina',
		'CreateGroup' => 'Kreiraj skupino',
		'RemoveFromGroup' => 'Odstrani iz skupine',
		'PasswordChangedAndSentTo' => 'Geslo spremenjeno in poslano <b>%s</b>.',
		'PasswordChangeRequestSent' => 'Zahtevek za spremembo gesla <b>%s</b> poslan <b>%s</b>.',
		'MenuUsersAndGroups' => 'Uporabniki & Skupine',
		'LastGroupsCreated' => 'Zadnjih %s kreiranih skupin',
		'LastUsersCreated' => 'Zadnjih %s kreiranih uporabnikov',
		'ShowGroup' => 'Prikaži skupino',
		'ShowUser' => 'Prikaži uporabnika',
		'NonAffectedUsers' => 'Nevključeni uporabniki',
		'UserModified' => 'Uporabnik uspešno spremenjen',
		'GroupModified' => 'Skupina %s je spremenjena',
		'PhotoFile' => 'Datoteka s fotografijo',
		'UserWithDolibarrAccess' => 'Uporabnik z dostopom do Dolibarrja',
		'ListOfUsersInGroup' => 'Seznam uporabnikov v tej skupini',
		'ListOfGroupsForUser' => 'Seznam skupin tega uporabnika',
		'UsersToAdd' => 'Uporabniki, ki jih je potrebno dodati v to skupino',
		'GroupsToAdd' => 'Skupine, v katere je potrebno dodati tega uporabnika',
		'NoLogin' => 'Ni uporabniškega imena',
		'LinkToCompanyContact' => 'Povezava na partnerja / kontakt',
		'LinkedToDolibarrMember' => 'Povezava do člana',
		'LinkedToDolibarrUser' => 'Povezava do Dolibarr uporabnika',
		'LinkedToDolibarrThirdParty' => 'Povezava do Dolibarr partnerja',
		'CreateDolibarrLogin' => 'Kreiraj Dolibarr uporabnika',
		'CreateDolibarrThirdParty' => 'Kreiraj partnerja',
		'LoginAccountDisable' => 'Račun onemogočen, vnesi novo ime uporabnika za aktivacijo.',
		'LoginAccountDisableInDolibarr' => 'Račun v Dolibarrju onemogočen.',
		'LoginAccountDisableInLdap' => 'Račun onemogočen v domeni.',
		'UsePersonalValue' => 'Uporabi osebne podatke',
		'GuiLanguage' => 'Jezik vmesnika',
		'InternalUser' => 'Interni uporabnik',
		'MyInformations' => 'Moji podatki',
		'ExportDataset_user_1' => 'Uporabniki Dolibarrja in značilnosti',
		'DomainUser' => 'Uporabnik domene %s',
		'Reactivate' => 'Ponovno aktiviraj',
		'CreateInternalUserDesc' => 'Ta obrazec omogoča kreiranje internega uporabnika v vašem podjetju/ustanovi. Za kreiranje zunanjega uporabnika (kupec, dobavitelj, ...), uporabite gumb \'Kreiraj Dolibarr uporabnika\' na kartici kontakta pri partnerju.',
		'InternalExternalDesc' => '<b>Interni</b> uporabnik je uporabnik, ki je zaposlen v vašem podjetju/ustanovi.<br> <b>Zunanji</b> uporabnik je kupec, dobavitelj, ali kdo drug.<br><br>V obeh primerih se lahko definirajo pravice za uporabo Dolibarrja, zunanji uporabnik ima lahko drugačno menijsko strukturo, kot interni uporabnik (Glejte Domov - Nastavitev - Prikaz)',
		'PermissionInheritedFromAGroup' => 'Dovoljenje dodeljeno zaradi podedovanja od druge uporabniške skupine.',
		'Inherited' => 'Podedovan',
		'UserWillBeInternalUser' => 'Kreiran uporabnik bo interni uporabnik (ker ni povezan z določenim partnerjem)',
		'UserWillBeExternalUser' => 'Kreiran uporabnik bo zunanji uporabnik (ker je povezan z določenim partnerjem)',
		'IdPhoneCaller' => 'ID klicatelja po telefonu',
		'UserLogged' => 'Uporabnik %s je prijavljen',
		'UserLogoff' => 'Uporabnik %s je odjavljen',
		'NewUserCreated' => 'Uporabik %s je kreiran',
		'NewUserPassword' => 'Sprememba gesla za %s',
		'EventUserModified' => 'Uporabnik %s je spremenjen',
		'UserDisabled' => 'Uporabnik %s je onemogočen',
		'UserEnabled' => 'Uporabnik %s je aktiviran',
		'UserDeleted' => 'Uporabnik %s je odstranjen',
		'NewGroupCreated' => 'Skupina %s je kreirana',
		'GroupDeleted' => 'Skupina %s je odstranjena',
		'ConfirmCreateContact' => 'Ali zares želite kreirati Dolibarr dostop za ta kontakt ?',
		'ConfirmCreateLogin' => 'Ali zares želite kreirati Dolibarr dostop za tega člana ?',
		'ConfirmCreateThirdParty' => 'Ali zares želite kreirati partnerja za tega člana ?',
		'LoginToCreate' => 'Kreiranje uporabniškega imena',
		'NameToCreate' => 'Kreiranje imena partnerja',
		'YourRole' => 'Vaše vloge',
		'YourQuotaOfUsersIsReached' => 'Dosežena je vaša kvota aktivnih uporabnikov !',
		'NbOfUsers' => 'Število uporabnikov',
		'DontDowngradeSuperAdmin' => 'Samo superadmin lahko degradira samo superadmin',
);
?>