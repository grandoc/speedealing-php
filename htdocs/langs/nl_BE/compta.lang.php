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

$compta = array(
		'CHARSET' => 'UTF-8',
		'Accountancy' => 'De boekhouding',
		'Treasury' => 'Penningmeester',
		'AccountancyCard' => 'Kaart boekhouding',
		'MenuFinancial' => 'Financiëel',
		'OptionMode' => 'Optie voor de boekhouding',
		'OptionModeTrue' => 'Optie Input-Ouput',
		'OptionModeVirtual' => 'Optie Credit-Debet',
		'OptionModeTrueDesc' => 'In deze context is de omzet berekend op betalingen (datum van de betalingen). \n De geldigheid van de cijfers zijn slechts verzekerd wanneer de boekhouding wordt gecontroleerd door middel van de input / output op de rekeningen via facturen.',
		'OptionModeVirtualDesc' => 'In deze context wordt de omzet berekend op de facturen (datum van validatie). Wanneer deze facturen verschuldigd zijn, ongeacht of zij betaald zijn of niet, ze zijn opgenomen in de omzet.',
		'FeatureIsSupportedInInOutModeOnly' => 'Feature only available in CREDITS-DEBTS accountancy mode (See Accountancy module configuration)',
		'Param' => 'Setup',
		'AccountsGeneral' => 'Rekeningen',
		'Account' => 'Rekening',
		'Accounts' => 'Rekeningen',
		'BillsForSuppliers' => 'Facturen van leveranciers',
		'Income' => 'Inkomsten',
		'Outcome' => 'Uitgaven',
		'ReportInOut' => 'Inkomsten / Uitgaven',
		'PaymentsNotLinkedToInvoice' => 'Betalingen niet gekoppeld aan een factuur, dus niet gekoppeld aan een derde partij',
		'PaymentsNotLinkedToUser' => 'Betalingen niet gekoppeld aan een gebruiker',
		'Profit' => 'Winst',
		'Balance' => 'Saldo',
		'Debit' => 'Debet',
		'Credit' => 'Credit',
		'Withdrawal' => 'Intrekking',
		'Withdrawals' => 'Intrekkingen',
		'AmountHTVATRealReceived' => 'HT ontvangen',
		'AmountHTVATRealPaid' => 'HT betaald',
		'VATToPay' => 'BTW te betalen',
		'VATReceived' => 'BTW ontvangen',
		'VATToCollect' => 'BTW te ontvangen',
		'VATSummary' => 'BTW Samenvatting',
		'VATPaid' => 'BTW betaald',
		'VATCollected' => 'Geïnde BTW',
		'ToPay' => 'Te betalen',
		'ToGetBack' => 'Terug te krijgen',
		'TaxAndDividendsArea' => 'Belastingen, sociale premies en dividenden gebied',
		'SocialContribution' => 'Sociale bijdrage',
		'SocialContributions' => 'Sociale premies',
		'MenuTaxAndDividends' => 'Belastingen en dividenden',
		'MenuSocialContributions' => 'Sociale premies',
		'MenuNewSocialContribution' => 'Nieuwe bijdrage',
		'NewSocialContribution' => 'Nieuwe sociale bijdrage',
		'ContributionsToPay' => 'Bijdragen te betalen',
		'AccountancyTreasuryArea' => 'Boekhouding / Penningmeester gebied',
		'AccountancySetup' => 'Boekhouding setup',
		'NewPayment' => 'Nieuwe betaling',
		'Payments' => 'Betalingen',
		'PaymentCustomerInvoice' => 'Factuur betaling klant',
		'PaymentSupplierInvoice' => 'Factuur betaling leverancier',
		'PaymentSocialContribution' => 'Sociale bijdrage betalen',
		'PaymentVat' => 'BTW-betaling',
		'ListPayment' => 'Lijst van de betalingen',
		'ListOfPayments' => 'Lijst van de betalingen',
		'ListOfCustomerPayments' => 'Lijst van klantenbetalingen',
		'ListOfSupplierPayments' => 'Lijst van leveranciersbetalingen',
		'DatePayment' => 'Betaaldatum',
		'NewVATPayment' => 'Nieuwe BTW-betaling',
		'VATPayment' => 'BTW-betaling',
		'VATPayments' => 'BTW-betalingen',
		'ShowVatPayment' => 'Toon BTW-betaling',
		'TotalToPay' => 'Totaal te betalen',
		'TotalVATReceived' => 'Totaal BTW ontvangen',
		'CustomerAccountancyCode' => 'Klant boekhouding code',
		'SupplierAccountancyCode' => 'Leverancier boekhouding code',
		'AlreadyPaid' => 'Reeds betaald',
		'AccountNumberShort' => 'Rekeningnummer',
		'AccountNumber' => 'Rekeningnummer',
		'NewAccount' => 'Nieuwe rekening',
		'SalesTurnover' => 'Omzet',
		'ByThirdParties' => 'Door derde partijen',
		'ByUserAuthorOfInvoice' => 'Door auteur factuur',
		'AccountancyExport' => 'Export boekhouding',
		'ErrorWrongAccountancyCodeForCompany' => 'Onjuiste boekhouding code voor %s',
		'SuppliersProductsSellSalesTurnover' => 'Omzet gegenereerd door de verkoop van producten van leveranciers.',
		'CheckReceipt' => 'Check neerlegging',
		'CheckReceiptShort' => 'Check neerlegging',
		'NewCheckReceipt' => 'Nieuwe korting',
		'NewCheckDeposit' => 'Nieuwe neerlegging controleren',
		'NewCheckDepositOn' => 'Nieuwe neerlegging controleren op rekening: %s',
		'NoWaitingChecks' => 'Geen wachtende neerleggingen.',
		'DateChequeReceived' => 'Datum cheque ontvangen',
		'NbOfCheques' => 'Aantal cheques',
		'PaySocialContribution' => 'Betalen van een sociale bijdrage',
		'ConfirmPaySocialContribution' => 'Weet u zeker dat u deze sociale bijdrage als betaald wilt klasseren?',
		'DeleteSocialContribution' => 'Verwijderen van een sociale bijdrage',
		'ConfirmDeleteSocialContribution' => 'Weet u zeker dat u deze sociale bijdrage wilt verwijderen?',
		'ExportDataset_tax_1' => 'Sociale premies en betalingen',
		'AnnualSummaryDueDebtMode' => 'Saldo van inkomsten en uitgaven, jaarlijks overzicht, en mode <b>%sLeningen Schulden%s</b> dit <b>comptabilité d\'engagement</b>.',
		'RulesResultDue' => '- Bedragen zijn inclusief alle belastingen <br> - Het omvat openstaande facturen, onkosten en BTW of ze betaald zijn of niet. <br> - Het is gebaseerd op de validatiedatum van de facturen en BTW en op de vervaldag voor de kosten.',
		'RulesResultInOut' => '- Bedragen zijn inclusief alle belastingen <br> - Het omvat de werkelijke betalingen op facturen, onkosten en BTW. <br> - Het is gebaseerd op de data van betaling van de facturen, uitgaven en BTW. <br>',
		'RulesCADue' => '- It includes the clients\' due invoices whether they are paid or not. <br>- It is based on the validation date of these invoices. <br>',
		'RulesCAIn' => '- Het omvat alle effectieve betalingen van facturen van klanten. <br> - Het is gebaseerd op de betalingsdatum van deze facturen <br>',
		'VATReportByCustomersInInputOutputMode' => 'Verslag de geïnd en betaalde BTW van de klant (BTW ontvangst)',
		'PercentOfInvoice' => '%%/factuur',
		'Dispatch' => 'Verzending',
		'Dispatched' => 'Verzonden',
		'ToDispatch' => 'Te verzenden',
);
?>