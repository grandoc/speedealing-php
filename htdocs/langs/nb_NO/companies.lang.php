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

$companies = array(
		'CHARSET' => 'UTF-8',
		'ErrorCompanyNameAlreadyExists' => 'Firmanavnet %s finnes allerede. Velg et annet!',
		'ErrorPrefixAlreadyExists' => 'Prefix %s finnes allered. Velg et annet!',
		'ErrorSetACountryFirst' => 'Angi land først',
		'DeleteThirdParty' => 'Slett en tredjepart',
		'ConfirmDeleteCompany' => 'Er du sikker på at du vil slette dette firmaet og all tilknyttet informasjon?',
		'DeleteContact' => 'Slett kontaktperson',
		'ConfirmDeleteContact' => 'Er du sikker på at du vil slette denne kontaktpersonen og all tilknyttet informasjon?',
		'MenuNewThirdParty' => 'Ny tredjepart',
		'MenuNewCompany' => 'Ny bedrift',
		'MenuNewCustomer' => 'Ny kunde',
		'MenuNewProspect' => 'Nytt prospekt',
		'MenuNewSupplier' => 'Ny leverandør',
		'MenuNewPrivateIndividual' => 'Ny privatperson',
		'MenuSocGroup' => 'Grupper',
		'NewCompany' => 'Ny bedrift (prospekt, kunde, leverandør)',
		'NewThirdParty' => 'Ny tredjepart (prospekt, kunde, lever.)',
		'NewSocGroup' => 'Ny bedriftsgruppe',
		'NewPrivateIndividual' => 'Ny privatperson (prospekt, kunde, leverandør)',
		'ProspectionArea' => 'Prospektområde',
		'SocGroup' => 'Firmagruppe',
		'IdThirdParty' => 'Tredjepart-ID',
		'IdCompany' => 'Firma-ID',
		'IdContact' => 'Kontaktperson-ID',
		'Company' => 'Bedrift',
		'CompanyName' => 'Firmanavn',
		'Companies' => 'Bedrifter',
		'CountryIsInEEC' => 'Landet er en del av Det europeiske fellesskap',
		'ThirdParty' => 'Tredjepart',
		'ThirdParties' => 'Tredjeparter',
		'ThirdPartyAll' => 'Tredjeparter (alle)',
		'ThirdPartyProspects' => 'Prospekter',
		'ThirdPartyCustomers' => 'Kunder',
		'ThirdPartyCustomersWithIdProf12' => 'Kunder ned %s eller %s',
		'ThirdPartySuppliers' => 'Leverandører',
		'ThirdPartyType' => 'Type tredjepart',
		'Company/Fundation' => 'Firma/Organisasjon',
		'Individual' => 'Privatperson',
		'ToCreateContactWithSameName' => 'Vil automatisk opprette en fysisk kontaktperson med samme informasjon',
		'ParentCompany' => 'Morselskap',
		'ReportByCustomers' => 'Rapporter pr kunde',
		'ReportByQuarter' => 'Rapporter pr kvartal',
		'CivilityCode' => 'Civility code (ikke i Norge)',
		'RegisteredOffice' => 'Registered office (ikke i Norge)',
		'Name' => 'Navn',
		'Lastname' => 'Etternavn',
		'Firstname' => 'Fornavn',
		'PostOrFunction' => 'Stilling',
		'UserTitle' => 'Tittel',
		'Surname' => 'Alias',
		'Address' => 'Adresse',
		'State' => 'Fylke(delstat)',
		'Region' => 'Region',
		'Country' => 'Land',
		'CountryCode' => 'Landkode',
		'Phone' => 'Telefon',
		'PhonePro' => 'Tlf. arbeid',
		'PhonePerso' => 'Tlf. privat',
		'PhoneMobile' => 'Tlf. mobil',
		'Fax' => 'Fax',
		'Zip' => 'Postnummer',
		'Town' => 'Poststed',
		'Web' => 'Web',
		'VATIsUsed' => 'MVA skal beregnes',
		'VATIsNotUsed' => 'MVA skal ikke beregnes',
		'ThirdPartyEMail' => '%s',
		'WrongCustomerCode' => 'Ugyldig kundekode',
		'WrongSupplierCode' => 'Ugyldig leverandørkode',
		'CustomerCodeModel' => 'Mal kundekode',
		'SupplierCodeModel' => 'Mal leverandørkode',
		'Gencod' => 'Strekkode',
		////////// Professionnal ID //////////
		'ProfId1Short' => 'Prof. id 1',
		'ProfId2Short' => 'Prof. id 2',
		'ProfId3Short' => 'Prof. id 3',
		'ProfId4Short' => 'Prof. id 4',
		'ProfId1' => 'Professional ID 1',
		'ProfId2' => 'Professional ID 2',
		'ProfId3' => 'Professional ID 3',
		'ProfId4' => 'Professional ID 4',
		'ProfId1AU' => 'Prof Id 1 (ABN)',
		'ProfId2AU' => '-',
		'ProfId3AU' => '-',
		'ProfId4AU' => '-',
		'ProfId1BE' => 'Prof Id 1 (Professionnel number)',
		'ProfId2BE' => '-',
		'ProfId3BE' => '-',
		'ProfId4BE' => '-',
		'ProfId1CH' => '-',
		'ProfId2CH' => '-',
		'ProfId3CH' => 'Prof Id 1 (Federal number)',
		'ProfId4CH' => 'Prof Id 2 (Commercial Record number)',
		'ProfId1FR' => 'Prof Id 1 (SIREN)',
		'ProfId2FR' => 'Prof Id 2 (SIRET)',
		'ProfId3FR' => 'Prof Id 3 (NAF, old APE)',
		'ProfId4FR' => 'Prof Id 4 (RCS/RM)',
		'ProfId1GB' => 'Prof Id 1 (Registration Number)',
		'ProfId2GB' => '-',
		'ProfId3GB' => 'Prof Id 3 (SIC)',
		'ProfId4GB' => '-',
		'ProfId1PT' => 'Prof Id 1 (NIPC)',
		'ProfId2PT' => 'Prof Id 2 (Social security number)',
		'ProfId3PT' => 'Prof Id 3 (Commercial Record number)',
		'ProfId4PT' => 'Prof Id 4 (Conservatory)',
		'ProfId1TN' => 'Prof Id 1 (RC)',
		'ProfId2TN' => 'Prof Id 2 (Fiscal matricule)',
		'ProfId3TN' => 'Prof Id 3 (Douane code)',
		'ProfId4TN' => 'Prof Id 4 (BAN)',
		'VATIntra' => 'Organisasjonsnummer',
		'VATIntraShort' => 'Org.nr.',
		'VATIntraVeryShort' => 'ORG',
		'VATIntraSyntaxIsValid' => 'Gyldig syntax',
		'VATIntraValueIsValid' => 'Gyldig verdi',
		'ProspectCustomer' => 'Prospekt/Kunde',
		'Prospect' => 'Prospekt',
		'CustomerCard' => 'Kundekort',
		'Customer' => 'Kunde',
		'CustomerDiscount' => 'Kunderabatt',
		'CustomerRelativeDiscount' => 'Relativ kunderabatt',
		'CustomerAbsoluteDiscount' => 'Absolutt kunderabatt',
		'CustomerRelativeDiscountShort' => 'Relativ rabatt',
		'CustomerAbsoluteDiscountShort' => 'Absolutt rabatt',
		'CompanyHasRelativeDiscount' => 'Denne kunden har en rabatt på <b>%s%%</b>',
		'CompanyHasNoRelativeDiscount' => 'Denne kunden har ingen relative rabatter angitt',
		'CompanyHasAbsoluteDiscount' => 'Denne kunden har fortsatt en kreditrabatt på <b>%s %s</b>',
		'CompanyHasCreditNote' => 'Denne kunden har fortsatt kreditnotaer for <b>%s %s</b>',
		'CompanyHasNoAbsoluteDiscount' => 'Denne kunden har ingen rabatt tilgjengelig',
		'CustomerAbsoluteDiscountAllUsers' => 'Absolutte rabatter (innrømmet av alle brukere)',
		'CustomerAbsoluteDiscountMy' => 'Absolutte rabatter (innrømmet av deg selv)',
		'DefaultDiscount' => 'Gjeldende rabatt',
		'AvailableGlobalDiscounts' => 'Absolutte rabatter er tilgjengelig',
		'DiscountNone' => 'Ingen',
		'Supplier' => 'Leverandør',
		'CompanyList' => 'Firmaoversikt',
		'AddContact' => 'Legg til kontaktperson',
		'Contact' => 'Kontaktperson',
		'NoContactDefined' => 'Denne tredjeparten har ingen kontaktpersoner registrert',
		'DefaultContact' => 'Gjeldende kontakt',
		'AddCompany' => 'Legg til firma',
		'AddThirdParty' => 'Legg til tredjepart',
		'DeleteACompany' => 'Slett et firma',
		'PersonalInformations' => 'Personlig informasjon',
		'AccountancyCode' => 'Regnskapskode',
		'CustomerCode' => 'Kundekode',
		'SupplierCode' => 'Leverandørkode',
		'CustomerAccount' => 'Kundekonto',
		'SupplierAccount' => 'Leverandørkonto',
		'CustomerCodeDesc' => 'Kundekode, unik for alle kunder',
		'SupplierCodeDesc' => 'Leverandørkode, unik for alle leverandører',
		'RequiredIfCustomer' => 'Påkrevet hvis tredjeparten er kunde eller prospekt',
		'RequiredIfSupplier' => 'Påkrevet hvis tredjeparten er leveandør',
		'ValidityControledByModule' => 'Gyldighet kontrollert av modulen',
		'ThisIsModuleRules' => 'Dette er reglene for denne modulen',
		'LastProspect' => 'Siste',
		'ProspectToContact' => 'Prospekt til kontakt',
		'CompanyDeleted' => 'Firma "%s" er slettet fra databasen.',
		'ListOfContacts' => 'Oversikt over kontaktpersoner',
		'ListOfProspectsContacts' => 'Oversikt over prospekters kontaktpersoner',
		'ListOfCustomersContacts' => 'Oversikt over kunders kontaktpersoner',
		'ListOfSuppliersContacts' => 'Oversikt over leverandøeres kontaktpersoner',
		'ListOfCompanies' => 'Oversikt over firmaer',
		'ListOfThirdParties' => 'Oversikt over tredjeparter',
		'ShowCompany' => 'Vis firma',
		'ShowContact' => 'Vis kontaktperson',
		'ContactsAllShort' => 'Alle (ingen filter)',
		'ContactType' => 'Kontaktperson type',
		'ContactForOrders' => 'Relaterte ordre',
		'ContactForProposals' => 'Relaterte tilbud',
		'ContactForContracts' => 'Relaterte kontrakter',
		'ContactForInvoices' => 'Relaterte fakturaer',
		'NoContactForAnyOrder' => 'Kontaktpersonen er ikke tilknyttet noen ordre',
		'NoContactForAnyProposal' => 'Kontaktpersonen er ikke tilknyttet noen tilbud',
		'NoContactForAnyContract' => 'Kontaktpersonen er ikke tilknyttet noen kontrakt',
		'NoContactForAnyInvoice' => 'Kontaktpersonen er ikke tilknyttet noen faktura',
		'NewContact' => 'Ny kontaktperson',
		'LastContacts' => 'Siste kontaktpersoner',
		'MyContacts' => 'Mine kontaktpersoner',
		'Phones' => 'Telefoner',
		'Capital' => 'Aksjekapital',
		'CapitalOf' => 'Aksjekapital på %s',
		'EditCompany' => 'Rediger firma',
		'EditDeliveryAddress' => 'Rediger leveringsadresse',
		'ThisUserIsNot' => 'Denne brukeren er hverken prospekt, kunde eller leverandør',
		'VATIntraCheck' => 'Sjekk',
		'VATIntraCheckDesc' => 'Lenken <b>%s</b> slår opp i den europeiske kontrolltjenesten for MVA (gjelder ikke norske foretak). Serveren må ha ekstern internettilgang for at denne funksjonen skal virke.',
		'VATIntraCheckURL' => 'http://ec.europa.eu/taxation_customs/vies/vieshome.do',
		'VATIntraCheckableOnEUSite' => 'Slå opp i Intracomunnautary VAT på EU-kommisjonens nettsted',
		'VATIntraManualCheck' => 'Du kan også sjekke manuelt på <a href="%s" target="_blank">%s</a>',
		'ErrorVATCheckMS_UNAVAILABLE' => 'Kontollrn er ikke tilgjengelig. Tjenesten er ikke tilgjengelig for landet (%s).',
		'NorProspectNorCustomer' => 'Hverken prospekt eller kunde',
		'JuridicalStatus' => 'Juridsk status',
		'Staff' => 'Ansatte',
		'ProspectLevelShort' => 'Potensiell',
		'ProspectLevel' => 'Potensiell prospekt',
		'ContactPrivate' => 'Privat',
		'ContactPublic' => 'Delt',
		'ContactVisibility' => 'Synlighet',
		'OthersNotLinkedToThirdParty' => 'Andre, ikke lenket til en tredjepart',
		'ProspectStatus' => 'Prospektstatus',
		'PL_NONE' => 'Ingen',
		'PL_UNKNOWN' => 'Ukjent',
		'PL_LOW' => 'Lav',
		'PL_MEDIUM' => 'Medium',
		'PL_HIGH' => 'Høy',
		'TE_UNKNOWN' => '-',
		'TE_STARTUP' => 'Oppstart',
		'TE_GROUP' => 'Stort firma',
		'TE_MEDIUM' => 'Medium firma',
		'TE_ADMIN' => 'Offentlig',
		'TE_SMALL' => 'Lite firma',
		'TE_RETAIL' => 'Detaljist',
		'TE_WHOLE' => 'Grossist',
		'TE_PRIVATE' => 'Privatperson',
		'TE_OTHER' => 'Annet',
		'StatusProspect-1' => 'Kontaktes ikke',
		'StatusProspect0' => 'Aldri kontaktet',
		'StatusProspect1' => 'Bør kontaktes',
		'StatusProspect2' => 'Kontakt pågår',
		'StatusProspect3' => 'Kontakt utført',
		'ChangeDoNotContact' => 'Endre status til \'Kontaktes ikke\'',
		'ChangeNeverContacted' => 'Endre status til \'Aldri kontaktet\'',
		'ChangeToContact' => 'Endre status til \'Bør kontaktes\'',
		'ChangeContactInProcess' => 'Endre status til \'Kontakt pågår\'',
		'ChangeContactDone' => 'Endre status til \'Kontakt utført\'',
		'ProspectsByStatus' => 'Prospekter etter status',
		'BillingContact' => 'Fakturakontakt',
		'NbOfAttachedFiles' => 'Antall vedlagte filer',
		'AttachANewFile' => 'Legg ved fil',
		'NoRIB' => 'Ingen konto registrert',
		'NoParentCompany' => 'Ingen',
		'ExportImport' => 'Import-Eksport',
		'ExportCardToFormat' => 'Eksportkort til format',
		'ContactNotLinkedToCompany' => 'Kontaktpersonen er ikke lenket til noen tredjepart',
		'DolibarrLogin' => 'Dolibarr innlogging',
		'NoDolibarrAccess' => 'Ingen tilgang til Dolibarr',
		'ExportDataset_company_1' => 'Firmaer/organisasjoner med opplysninger',
		'ExportDataset_company_2' => 'Kontaktpersoner med opplysninger',
		'DeliveriesAddress' => 'Leveringsadresser',
		'DeliveryAddress' => 'Leveringsadresse',
		'DeliveryAddressLabel' => 'Leveringsadresse etikett',
		'DeleteDeliveryAddress' => 'Slett en leveringsadresse',
		'ConfirmDeleteDeliveryAddress' => 'Er du sikker på at du vil slette denne leveringsadressen?',
		'NewDeliveryAddress' => 'Ny leveringsadresse',
		'AddDeliveryAddress' => 'Legg til adresse',
		'AddAddress' => 'Legg til adresse',
		'NoOtherDeliveryAddress' => 'Ingen alternativ leveringsadresse lagt inn',
		'JuridicalStatus200' => 'Uavhengig',
		'DeleteFile' => 'Slett fil',
		'ConfirmDeleteFile' => 'Er du sikker på at du vil slette denne filen?',
		'AllocateCommercial' => 'Allocate a commercial',
		'SelectCountry' => 'Velg land',
		'SelectCompany' => 'Velg tredjepart',
		'Organization' => 'Organisasjon',
		'AutomaticallyGenerated' => 'Automatisk opprettet',
		'FiscalYearInformation' => 'Informasjon om regnskapsåret',
		'FiscalMonthStart' => 'Første måned i regnskapsåret',
		// Tigre
		'TigreNumRefModelDesc1' => 'Gir en egendefinert kunde/leverandørnummer ut fra definerte regler.',
		'Contacts' => 'Kontakter',
		'ThirdPartyContacts' => 'Tredjepart kontakter',
		'ThirdPartyContact' => 'Tredjepart kontakt',
		'StatusContactValidated' => 'Status for kontakt',
		'ThirdPartyName' => 'Tredjepart navn',
		'Poste' => 'Posisjon',
		'DefaultLang' => 'Språk som standard',
		'LocalTax1IsUsedES' => 'RE brukes',
		'LocalTax1IsNotUsedES' => 'RE brukes ikke',
		'LocalTax2IsUsedES' => 'IRPF brukes',
		'LocalTax2IsNotUsedES' => 'IRPF brukes ikke',
		'ProfId1DE' => 'Prof Id 1 (USt.-IdNr)',
		'ProfId2DE' => 'Prof ID 2 (USt.-Nr)',
		'ProfId3DE' => 'Prof Id 3 (Handelsregister-Nr.)',
		'ProfId4DE' => '-',
		'ProfId1IN' => 'Prof Id 1 (TIN)',
		'ProfId2IN' => 'Prof ID 2',
		'ProfId3IN' => 'Prof ID 3',
		'ProfId4IN' => 'Prof ID 4',
		'ProfId1ES' => 'Prof Id 1 (CIF / NIF)',
		'ProfId2ES' => 'Prof ID 2 (personnummer)',
		'ProfId3ES' => 'Prof Id 3 (CNAE)',
		'ProfId4ES' => 'Prof Id 4 (Collegiate nummer)',
		'ProfId1NL' => 'KVK nummer',
		'ProfId2NL' => '-',
		'ProfId3NL' => '-',
		'ProfId4NL' => '-',
		'ProfId1AR' => 'Prof Id 1 (CUIT / Cuil)',
		'ProfId2AR' => 'Prof ID 2 (inntekter på brutes)',
		'ProfId3AR' => '-',
		'ProfId4AR' => '-',
		'PriceLevel' => 'Prisnivå',
		'SupplierCategory' => 'Leverandør kategori',
		'YouMustCreateContactFirst' => 'Du må opprette e-postmeldinger kontakter for tredjepart første for å kunne legge til e-post meldinger.',
		'ListSuppliersShort' => 'Liste over leverandører',
		'ListProspectsShort' => 'Liste av prospekter',
		'ListCustomersShort' => 'Liste over kunder',
		'MonkeyNumRefModelDesc' => 'Tilbake numero med format %syymm-nnnn for kunden koden og %syymm-nnnn for leverandør koden der åå er året, er mm måned og nnnn er en sekvens uten pause og ingen retur til 0.',
		'LeopardNumRefModelDesc' => 'Kunde / leverandør-koden er gratis. Denne koden kan endres når som helst.',
		'SelectThirdParty' => 'Velg en tredjepart',
		'Subsidiary' => 'Datterselskap',
		'Subsidiaries' => 'Datterselskaper',
		'NoSubsidiary' => 'Ingen datterselskap',
		'CountryId' => 'Land id',
		'ProfId5Short' => 'Prof id 5',
		'ProfId5' => 'Profesjonell ID 5',
		'ProfId5AR' => '-',
		'ProfId5AU' => '-',
		'ProfId5BE' => '-',
		//ProfId1BR=CNAE
		//ProfId2BR=CNPJ
		//ProfId3BR=CPF
		//ProfId4BR=INSS
		//ProfId5BR=IE
		//ProfId6BR=IM
		'ProfId5CH' => '-',
		'ProfId1CL' => 'Prof Id 1 (RUT)',
		'ProfId2CL' => '-',
		'ProfId3CL' => '-',
		'ProfId4CL' => '-',
		'ProfId5CL' => '-',
		'ProfId1CO' => 'Prof Id 1 (RUT)',
		'ProfId2CO' => '-',
		'ProfId3CO' => '-',
		'ProfId4CO' => '-',
		'ProfId5CO' => '-',
		'ProfId5DE' => '-',
		'ProfId5ES' => '-',
		'ProfId5FR' => 'Prof Id 5',
		'ProfId5GB' => '-',
		'ProfId1HN' => 'Id prof. 1 (RTN)',
		'ProfId2HN' => '-',
		'ProfId3HN' => '-',
		'ProfId4HN' => '-',
		'ProfId5HN' => '-',
		'ProfId5IN' => 'Prof Id 5',
		'ProfId1MA' => 'Id prof. 1 (RC)',
		'ProfId2MA' => 'Id prof. 2 (patente)',
		'ProfId3MA' => 'Id prof. 3 (IF)',
		'ProfId4MA' => 'Id prof. 4 (CNSS)',
		'ProfId5MA' => '-',
		'ProfId1MX' => 'Prof Id 1 (RFC).',
		'ProfId2MX' => 'Prof Id 2 (R.. P. IMSS)',
		'ProfId3MX' => 'Prof Id 3 (Profesional Charter)',
		'ProfId4MX' => '-',
		'ProfId5MX' => '-',
		'ProfId5NL' => '-',
		'ProfId5PT' => '-',
		'ProfId1SN' => 'RC',
		'ProfId2SN' => 'NINEA',
		'ProfId3SN' => '-',
		'ProfId4SN' => '-',
		'ProfId5SN' => '-',
		'ProfId5TN' => '-',
		'ProfId1RU' => 'Prof Id 1 (OGRN)',
		'ProfId2RU' => 'Prof Id 2 (INN)',
		'ProfId3RU' => 'Prof Id 3 (KPP)',
		'ProfId4RU' => 'Prof Id 4 (OKPO)',
		'ProfId5RU' => '-',
		'EditContact' => 'Endre kontakt / adresse',
		'ContactsAddresses' => 'Kontakter / Adresser',
		'ImportDataset_company_1' => 'Tredjepart (selskaper / stiftelser) og egenskaper',
		'ImportDataset_company_2' => 'Kontakter (av thirdparties eller ikke) og attributter',
		'ThirdPartiesArea' => 'Tredje parter område',
		'LastModifiedThirdParties' => 'Siste %s endret tredjeparter',
		'UniqueThirdParties' => 'Totalt unike tredjeparter',
		'InActivity' => 'Åpent',
		'ActivityCeased' => 'Stengt',
		'ActivityStateFilter' => 'Aktivitet status',
);
?>