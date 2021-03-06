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

$withdrawals = array(
		'CHARSET' => 'UTF-8',
		'StandingOrdersArea' => 'Dauerauftragsübersicht',
		'CustomersStandingOrdersArea' => 'Dauerauftragsübersicht (Kunden)',
		'StandingOrders' => 'Daueraufträge',
		'StandingOrder' => 'Dauerauftrag',
		'NewStandingOrder' => 'Neuer Dauerauftrag',
		'StandingOrderToProcess' => 'Zu bearbeiten',
		'StandingOrderProcessed' => 'Bearbeitet',
		'Withdrawals' => 'Abbuchungen',
		'Withdrawal' => 'Abbuchung',
		'WithdrawalsReceipts' => 'Abbuchungsbelege',
		'WithdrawalReceipt' => 'Abbuchungsbeleg',
		'WithdrawalReceiptShort' => 'Beleg',
		'LastWithdrawalReceipts' => '%s neuste Abbuchungsbelege',
		'WithdrawedBills' => 'Abgebuchte Rechnungen',
		'WithdrawalsLines' => 'Abbuchungszeilen',
		'RequestStandingOrderToTreat' => 'Antrag auf Dauerauftrag zur Behandlung von',
		'RequestStandingOrderTreated' => 'Antrag auf Dauerauftrag behandelt',
		'CustomersStandingOrders' => 'Daueraufträge (Kunden)',
		'CustomerStandingOrder' => 'Dauerauftrag (Kunde)',
		'NbOfInvoiceToWithdraw' => 'Nr. der abzubuchenden Rechnung',
		'NbOfInvoiceToWithdrawWithInfo' => 'Nb of invoice with withdraw request for customers having defined bank account information',
		'InvoiceWaitingWithdraw' => 'Rechnung warten auf Abbuchung',
		'AmountToWithdraw' => 'Abbuchungsbetrag',
		'WithdrawsRefused' => 'Abbuchungen abgelehnt',
		'NoInvoiceToWithdraw' => 'Keine Kundenrechnung mit Zahlungsart ""Abbuchung" im Wartezustand. Stellen Sie neue Anträge im \'Abbuchungs\'-Tab der Rechnungskarte.',
		'ResponsibleUser' => 'Verantwortlicher Benutzer',
		'WithdrawalsSetup' => 'Abbuchungseinstellungen',
		'WithdrawStatistics' => 'Abbuchungsstatistik',
		'WithdrawRejectStatistics' => 'Statistik abgelehnter Abbuchungen',
		'LastWithdrawalReceipt' => '%s neuste Abbuchungsbelege',
		'MakeWithdrawRequest' => 'Abbuchungsantrag stellen',
		'ThirdPartyBankCode' => 'BLZ Partner',
		'ThirdPartyDeskCode' => 'Schalter-Code Partner',
		'NoInvoiceCouldBeWithdrawed' => 'Keine Rechnung erfolgreich abgebucht. Überprüfen Sie die Kontonummern der den Rechnungen zugewiesenen Partnern.',
		'ClassCredited' => 'Als eingegangen markieren',
		'ClassCreditedConfirm' => 'Möchten Sie diesen Abbuchungsbeleg wirklich als auf Ihrem Konto eingegangen markieren?',
		'TransData' => 'Überweisungsdatum',
		'TransMetod' => 'Überweisungsart',
		'Send' => 'Senden',
		'Lines' => 'Zeilen',
		'StandingOrderReject' => 'Ablehnung ausstellen',
		'InvoiceRefused' => 'Ablehnung in Rechnung stellen',
		'WithdrawalRefused' => 'Abbuchungen abgelehnt',
		'WithdrawalRefusedConfirm' => 'Möchten Sie wirklich eine Abbuchungsablehnung zu diesem Partner erstellen?',
		'RefusedData' => 'Ablehnungsdatum',
		'RefusedReason' => 'Ablehnungsgrund',
		'RefusedInvoicing' => 'Ablehnung in Rechnung stellen',
		'NoInvoiceRefused' => 'Ablehnung nicht in Rechnung stellen',
		'InvoiceRefused' => 'Ablehnung in Rechnung stellen',
		'Status' => 'Status',
		'StatusUnknown' => 'Unbekannt',
		'StatusWaiting' => 'Wartestellung',
		'StatusTrans' => 'Transmitted',
		'StatusCredited' => 'Eingelöst',
		'StatusRefused' => 'Abgelehnt',
		'StatusMotif0' => 'Nicht spezifiziert',
		'StatusMotif1' => 'Unzureichende Deckung',
		'StatusMotif2' => 'Abbuchung angefochten',
		'StatusMotif3' => 'Kein Abbuchungsauftrag',
		'StatusMotif4' => 'Ablehnung durch Kontoinhaber',
		'StatusMotif5' => 'Fehlerhafte Kontodaten',
		'StatusMotif6' => 'Leeres Konto',
		'StatusMotif7' => 'Gerichtsbescheid',
		'StatusMotif8' => 'Andere Gründe',
		'CreateAll' => 'Alle abbuchen',
		'CreateGuichet' => 'Nur Büro',
		'CreateBanque' => 'Nur Bank',
		'OrderWaiting' => 'Wartestellung',
		'NotifyTransmision' => 'Abbuchungsüberweisung',
		'NotifyEmision' => 'Abbuchungsemission',
		'NotifyCredit' => 'Abbuchungsgutschrift',
		'NumeroNationalEmetter' => 'Nat. Überweisernummer',
		'PleaseSelectCustomerBankBANToWithdraw' => 'Select information about customer bank account to withdraw',
		'WithBankUsingRIB' => 'For bank accounts using RIB',
		'WithBankUsingBANBIC' => 'For bank accounts using IBAN/BIC/SWIFT',
		'BankToReceiveWithdraw' => 'Bank account to receive withdraws',
		'CreditDate' => 'Credit on',
		'WithdrawalFileNotCapable' => 'Unable to generate withdrawal receipt file for your country',
		'ShowWithdraw' => 'Show Withdraw',
		'IfInvoiceNeedOnWithdrawPaymentWontBeClosed' => 'However, if invoice has at least one withdrawal payment not yet processed, it won\'t be set as payed to allow to manage withdrawal before.',
		'DoStandingOrdersBeforePayments' => 'This tabs allows you to request for a standing order. Once it will be finished, you can type the payment to close the invoice.',
		////// Notifications
		'InfoCreditSubject' => 'Payment of standing order %s by the bank',
		'InfoCreditMessage' => 'The standing order %s has been paid by the bank<br>Data of payment: %s',
		'InfoTransSubject' => 'Transmission of standing order %s to bank',
		'InfoTransMessage' => 'The standing order %s has been transmited to bank by %s %s.<br><br>',
		'InfoTransData' => 'Amount: %s<br>Metode: %s<br>Date: %s',
		'InfoFoot' => 'This is an automated message sent by Dolibarr',
		'InfoRejectSubject' => 'Standing order refused',
		'InfoRejectMessage' => 'Hello,<br><br>the standig order of invoice %s related to the company %s, with an amount of %s has been refused by the bank.<br><br>--<br>%$',
		'ModeWarning' => 'Option for real mode was not set, we stop after this simulation'
);
?>