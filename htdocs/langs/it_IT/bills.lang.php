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

$bills = array(
		'CHARSET' => 'UTF-8',
		'Abandoned' => 'Abbandonato',
		'AbsoluteDiscountUse' => 'Questo tipo di credito può essere utilizzato su fattura prima della sua convalida',
		'ActionsOnBill' => 'Azioni su fattura',
		'AddBill' => 'Aggiungi fattura o nota di credito',
		'AddCreditNote' => 'Crea nota di credito',
		'AddDiscount' => 'Crea sconto',
		'AddGlobalDiscount' => 'Creare sconto globale',
		'AddRelativeDiscount' => 'Crea sconto relativo',
		'AllBills' => 'Tutte le fatture',
		'AllCompletelyPayedInvoiceWillBeClosed' => 'Tutte le fatture totalmente pagate saranno automaticamente chiuse allo stato &quot;Pagato&quot;.',
		'AlreadyPaid' => 'Già pagato',
		'AlreadyPaidNoCreditNotesNoDeposits' => 'Già pagato (senza note di credito o depositi)',
		'AmountExpected' => 'Importo atteso',
		'Amount' => 'Importo',
		'AmountOfBillsByMonthHT' => 'Importo delle fatture per mese (al netto delle imposte)',
		'AmountOfBillsByMonth' => 'Importo delle fatture per mese',
		'AmountOfBills' => 'Importo delle fatture',
		'BankAccountNumberKey' => 'Chiave',
		'BankAccountNumber' => 'Numero di conto',
		'BankCode' => 'Codice banca',
		'BankDetails' => 'Dati banca',
		'BIC' => 'BIC/SWIFT',
		'BICNumber' => 'Codice BIC/SWIFT',
		'BillAddress' => 'Indirizzo di fatturazione',
		'Billed' => 'Fatturati',
		'Bill' => 'Fattura',
		'BillFrom' => 'Da',
		'BillsCustomer' => 'Fattura attiva',
		'BillsCustomers' => 'Fatture attive',
		'BillsCustomersUnpaid' => 'Fatture attive non pagate',
		'BillsCustomersUnpaidForCompany' => 'Fatture attive non pagate per %s',
		'Bills' => 'Fatture',
		'BillShortStatusCanceled' => 'Abbandonata',
		'BillShortStatusClosedPaidPartially' => 'Pagata (in parte)',
		'BillShortStatusClosedUnpaid' => 'Chiusa',
		'BillShortStatusConverted' => 'Conv. in sconto',
		'BillShortStatusDraft' => 'Bozza',
		'BillShortStatusNotPaid' => 'Non pagata',
		'BillShortStatusPaidBackOrConverted' => 'Processata',
		'BillShortStatusPaid' => 'Pagata',
		'BillShortStatusStarted' => 'Iniziata',
		'BillShortStatusValidated' => 'Convalidata',
		'BillsLate' => 'Ritardi nei pagamenti',
		'BillsStatistics' => 'Statistiche fatture',
		'BillsStatisticsSuppliers' => 'Statistiche fatture fornitori',
		'BillsSuppliers' => 'Fatture dei fornitori',
		'BillsSuppliersUnpaid' => 'Fatture dei fornitori non pagate',
		'BillsSuppliersUnpaidForCompany' => 'Fatture dei fornitori non pagate per %s',
		'BillStatusCanceled' => 'Annullata',
		'BillStatusClosedPaidPartially' => 'Pagata (in parte)',
		'BillStatusClosedUnpaid' => 'Chiusa (non pagata)',
		'BillStatusConverted' => 'Conv. in sconto',
		'BillStatusDraft' => 'Bozza (deve essere convalidata)',
		'BillStatusNotPaid' => 'Non pagata',
		'BillStatusPaidBackOrConverted' => 'Rimborsata o convertita in sconto',
		'BillStatusPaid' => 'Pagata',
		'BillStatusStarted' => 'Iniziata',
		'BillStatus' => 'Stato fattura',
		'BillStatusValidated' => 'Convalidata (deve essere pagata)',
		'BillsUnpaid' => 'Non pagate',
		'BillTo' => 'Fattura a',
		'CancelBill' => 'Annulla una fattura',
		'CantRemovePaymentWithOneInvoicePaid' => 'Impossibile rimuovere il pagamento. C\'è almeno una fattura classificata come pagata',
		'CardBill' => 'Scheda fattura',
		'Cash' => 'Contanti',
		'ChangeIntoRepeatableInvoice' => 'Cambia in ripetibile',
		'ChequeBank' => 'Banca dell\'assegno',
		'ChequeDeposits' => 'Depositi assegni',
		'ChequeMaker' => 'Emittente assegno',
		'ChequeNumber' => 'Assegno N°',
		'ChequeOrTransferNumber' => 'Assegno/Bonifico N°',
		'ChequesArea' => 'Area assegni',
		'Cheques' => 'Assegni',
		'ChequesReceipts' => 'Ricevute assegni',
		'ClassifyBill' => 'Classificazione fattura',
		'ClassifyCanceled' => 'Classifica come "abbandonata"',
		'ClassifyClosed' => 'Classifica come "chiusa"',
		'ClassifyPaid' => 'Classifica come "pagata"',
		'ClassifyPaidPartially' => 'Classifica come "parzialmente pagata"',
		'CloneInvoice' => 'Clona fattura',
		'CloneMainAttributes' => 'Clona oggetto con i suoi principali attributi',
		'ClosePaidInvoicesAutomatically' => 'Classifica come &quot;pagate&quot; tutte le fatture interamente saldate.',
		'ConfirmCancelBillQuestion' => 'Perché si desidera classificare questa fattura come "abbandonata" ?',
		'ConfirmCancelBill' => 'Vuoi davvero annullare la fattura <b>%s</b>?',
		'ConfirmClassifyAbandonReasonOther' => 'Altro',
		'ConfirmClassifyAbandonReasonOtherDesc' => 'Questa scelta sarà utilizzata in tutti gli altri casi. Perché, ad esempio, si prevede di creare una fattura in sostituzione.',
		'ConfirmClassifyPaidBill' => 'Vuoi davvero cambiare lo stato della fattura <b>%s</b> in "pagata"?',
		'ConfirmClassifyPaidPartiallyQuestion' => 'La fattura non è stata pagata completamente. Quali sono i motivi per chiudere questa fattura?',
		'ConfirmClassifyPaidPartiallyReasonAvoirDesc' => 'Utilizzare questa scelta se tutte le altre opzioni sono inadeguate.',
		'ConfirmClassifyPaidPartiallyReasonAvoir' => 'La rimanenza da pagare <b>( %s %s)</b> viene concessa come sconto perché il pagamento è stato effettuato prima del termine. L\'IVA verrà recuperata con una nota di credito.',
		'ConfirmClassifyPaidPartiallyReasonBadCustomer' => 'Cattivo cliente',
		'ConfirmClassifyPaidPartiallyReasonBadCustomerDesc' => 'Un <b>cattivo cliente</b> è un cliente che si rifiuta di pagare il suo debito.',
		'ConfirmClassifyPaidPartiallyReasonDiscountNoVatDesc' => 'Questa scelta è possibile se la fattura prevede la clausola di importi adeguabili. (Esempio «Solo l\'imposta corrispondente al prezzo effettivamente pagato dà diritto alla deduzione»)',
		'ConfirmClassifyPaidPartiallyReasonDiscountNoVat' => 'La rimanenza da pagare <b>( %s %s)</b> viene concessa come sconto perché il pagamento è stato effettuato prima del termine. Accetto di perdere l\'IVA su questo sconto.',
		'ConfirmClassifyPaidPartiallyReasonDiscountVatDesc' => 'In alcuni paesi, questa scelta potrebbe essere possibile solo se la fattura contiene la clausola adeguata.',
		'ConfirmClassifyPaidPartiallyReasonDiscountVat' => 'La rimanenza da pagare <b>( %s %s)</b> viene concessa come sconto perché il pagamento è stato effettuato prima del termine. L\'IVA verrà recuperata senza una nota di credito.',
		'ConfirmClassifyPaidPartiallyReasonOtherDesc' => 'Utilizzare questa scelta se tutte le altre opzioni sono inadeguate, per esempio: <br/>- il pagamento non è completo, in quanto alcuni prodotti sono stati restituiti.<br/>- l\'importo richiesto è troppo oneroso per essere trasformato in uno sconto.<br/>Per correttezza contabile dovrà essere emessa una nota di credito.',
		'ConfirmClassifyPaidPartiallyReasonOther' => 'Altri motivi',
		'ConfirmClassifyPaidPartiallyReasonProductReturnedDesc' => 'Questa scelta viene utilizzata quando il pagamento non è completo perché alcuni dei prodotti sono stati restituiti',
		'ConfirmClassifyPaidPartiallyReasonProductReturned' => 'Parziale restituzione di prodotti',
		'ConfirmClassifyPaidPartially' => 'Vuoi davvero cambiare lo stato della fattura <b>%s</b> in "parzialmente pagata"?',
		'ConfirmCloneInvoice' => 'Sei sicuro di voler clonare la <b>fattura %s?</b>',
		'ConfirmConvertToReduc' => 'Vuoi trasformare questa nota di credito in uno sconto assoluto?<br/> L\'importo di tale credito verrà salvato nello sconto assoluto del cliente e potrà essere utilizzato come sconto per una successiva fattura a questo cliente.',
		'ConfirmCustomerPayment' => 'Confermare riscossione per <b>%s</b> %s?',
		'ConfirmDeleteBill' => 'Vuoi davvero cancellare questa fattura?',
		'ConfirmDeletePayment' => 'Vuoi davvero cancellare questo pagamento?',
		'ConfirmRemoveDiscount' => 'Vuoi davvero eliminare questo sconto?',
		'ConfirmSplitDiscount' => 'Vuoi davvero dividere questo sconto <b>del %s %s</b> in 2 sconti inferiori?',
		'ConfirmUnvalidateBill' => 'Vuoi davvero portare la fattura <b>%s</b> allo stato di progetto?',
		'ConfirmValidateBill' => 'Vuoi davvero convalidare questa fattura con riferimento <b> %s </b>?',
		'ConfirmValidatePayment' => 'Vuoi davvero convalidare questo pagamento? Una volta convalidato non si potranno più operare modifiche.',
		'ConsumedBy' => 'Consumati da',
		'ConvertToReduc' => 'Converti in futuro sconto',
		'CorrectInvoice' => 'Corretta fattura %s',
		'CorrectionInvoice' => 'Correzione fattura',
		'CreateBill' => 'Crea fattura',
		'CreateDraft' => 'Crea bozza',
		'CreateFromRepeatableInvoice' => 'Crea da fattura ripetibile',
		'CreateRepeatableInvoice' => 'Crea fattura ripetibile',
		'CreditNoteConvertedIntoDiscount' => 'Questa nota di credito è stata convertita in uno sconto di %s',
		'CreditNoteDepositUse' => 'La fattura deve essere convalidata per l\'utilizzo di questo credito',
		'CreditNote' => 'Nota di credito',
		'CreditNotes' => 'Note di credito',
		'CustomerBillsUnpaid' => 'Fatture attive non pagate',
		'CustomerInvoice' => 'Fattura attive',
		'CustomersDraftInvoices' => 'Bozze di fatture attive',
		'CustomersInvoicesAndInvoiceLines' => 'Fatture attive e righe di fattura',
		'CustomersInvoicesAndPayments' => 'Fatture attive e pagamenti',
		'CustomersInvoices' => 'Fatture attive',
		'DateEcheance' => 'Data di scadenza',
		'DateInvoice' => 'Data di fatturazione',
		'DateMaxPayment' => 'Termine ultimo per il pagamento',
		'DatePayment' => 'Data di pagamento',
		'DeleteBill' => 'Elimina fattura',
		'DeletePayment' => 'Elimina pagamento',
		'Deposit' => 'Deposito',
		'Deposits' => 'Depositi',
		'DescTaxAndDividendsArea' => 'In quest\'area è presentata una sintesi di tutti i pagamenti effettuati a fini fiscali o contributivi. Vengono visualizzati solo i pagamenti relativi all\'anno fiscale in corso.',
		'DeskCode' => 'Codice sportello',
		'DisabledBecauseNotErasable' => 'Disabilitate perché non cancellabili',
		'DisabledBecausePayments' => 'Impossibile perché ci sono dei pagamenti',
		'DisabledBecauseRemainderToPayIsZero' => 'Disabilitata perché il restante da pagare è zero',
		'DisabledBecauseReplacedInvoice' => 'Disabilitata perché la fattura è stata sostituita',
		'DiscountAlreadyCounted' => 'Sconto già applicato',
		'DiscountFromCreditNote' => 'Sconto da nota di credito per %s',
		'DiscountFromDeposit' => 'Pagamenti dal deposito della fattura %s',
		'DiscountOfferedBy' => 'Sconto concesso da',
		'Discount' => 'Sconto',
		'Discounts' => 'Sconti',
		'DiscountStillRemaining' => 'Sconto ancora disponibile',
		'DispenseMontantLettres' => 'Le fatture redatte attraverso un processo meccanografico sono escluse dall\'ordine per lettera',
		'DispenseMontantLettres' => 'Le fatture redatte attraverso un processo meccanografico sono escluse dall\'ordine per lettera',
		'DoPaymentBack' => 'Emetti rimborso',
		'DoPayment' => 'Emetti pagamento',
		'DraftBills' => 'Fatture in bozza',
		'EditGlobalDiscounts' => 'Modifica sconti globali',
		'EditRelativelDiscount' => 'Modifica sconto relativi',
		'EnterPaymentDueToCustomer' => 'Emettere il pagamento dovuto al cliente',
		'EnterPaymentReceivedFromCustomer' => 'Inserisci il pagamento ricevuto dal cliente',
		'ErrorBillNotFound' => 'La fattura %s non esiste',
		'ErrorCantCancelIfReplacementInvoiceNotValidated' => 'Errore, non si può annullare una fattura che è stato sostituita da un\'altra fattura non ancora convalidata',
		'ErrorCreateBankAccount' => 'Crea un conto bancario, quindi passa al modulo impostazione delle fatture per definire le modalità di pagamento',
		'ErrorDiscountAlreadyUsed' => 'Errore, sconto già utilizzato',
		'ErrorInvoiceAlreadyReplaced' => 'Errore, si tenta di convalidare una fattura per sostituire la fattura %s. Ma questa è già stato sostituita dalla fattura %s.',
		'ErrorInvoiceAvoirMustBeNegative' => 'Errore, la fattura a correzione deve avere un importo negativo',
		'ErrorInvoiceOfThisTypeMustBePositive' => 'Errore, questo tipo di fattura deve avere importo positivo',
		'ErrorNoPaiementModeConfigured' => 'Nessuna modalità di pagamento predefinita. Vai al modulo impostazione delle fatture per risolvere il problema.',
		'ErrorVATIntraNotConfigured' => 'Numero di partita IVA non ancora impostato',
		'EscompteOffered' => 'Sconto offerto (pagamento prima del termine)',
		'ExcessReceived' => 'Ricevuto in eccesso',
		'ExpectedToPay' => 'Pagamento previsto',
		'ExportDataset_invoice_1' => 'Elenco delle fatture attive e righe di fattura',
		'ExportDataset_invoice_2' => 'Fatture clienti e pagamenti',
		'ExtraInfos' => 'Extra info',
		'File' => 'File',
		'FullPhoneNumber' => 'Telefono',
		'GlobalDiscount' => 'Sconto assoluto',
		'HelpAbandonBadCustomer' => 'Tale importo è stato abbandonato (cattivo cliente) ed è considerato come un abbandono imprevisto.',
		'HelpAbandonOther' => 'Tale importo è stato abbandonato dal momento che è stato un errore (cliente errato o fattura sostituita da altra, per esempio)',
		'HelpEscompte' => 'Questo sconto è concesso al cliente perché il suo pagamento è stato effettuato prima del termine.',
		'HelpPaymentHigherThanReminderToPay' => 'Attenzione, l\'importo del pagamento di una o più fatture è più elevato rispetto al dovuto.<br/> Modifica l\'importo, oppure conferma e crea una nota di credito per la differenza riscossa.',
		'IBAN' => 'IBAN',
		'IBANNumber' => 'Codice IBAN',
		'IdSocialContribution' => 'Id contributo',
		'IntracommunityVATNumber' => 'Partita IVA intracomunitaria',
		'InvoiceAvoirAsk' => 'Nota di credito per correggere fattura',
		'InvoiceAvoirDesc' => 'La <b>nota di credito a correzione</b> è una fattura con importo negativo utilizzata per risolvere il problema di una fattura emessa con importo diverso da quello realmente pagato (perché il cliente ha pagato troppo per errore, o non ha pagato completamente perché ad esempio ha restituito alcuni prodotti).<br/><br/>Nota: la fattura originale deve essere già chiusa ( "pagata" o "parzialmente pagata") per consentire la creazione di una nota di credito a correzione.',
		'InvoiceAvoir' => 'Nota di credito a correzione',
		'InvoiceCustomer' => 'Fattura attiva',
		'InvoiceDateCreation' => 'Data di creazione fattura',
		'InvoiceDepositAsk' => 'Deposito fattura',
		'InvoiceDeposit' => 'Deposito fattura',
		'InvoiceDepositDesc' => 'Fattura emessa quando è stato ricevuto un deposito.',
		'Invoice' => 'Fattura',
		'InvoiceHasAvoir' => 'Rettificata da una o più fatture',
		'InvoiceId' => 'Id fattura',
		'InvoiceLine' => 'Riga fattura',
		'InvoiceNotChecked' => 'Fattura non selezionata',
		'InvoiceNote' => 'Nota Fattura',
		'InvoicePaid' => 'Fattura pagata',
		'InvoiceProFormaAsk' => 'Fattura proforma',
		'InvoiceProFormaDesc' => 'La <b>fattura proforma</b> è uguale ad una fattura vera, ma non ha valore contabile.',
		'InvoiceProForma' => 'Fattura proforma',
		'InvoiceProFormatAsk' => 'Fattura proforma',
		'InvoiceProFormatDesc' => '<b>La fattura proforma</b> è uguale ad una fattura vera, ma non ha valore contabile.',
		'InvoiceProFormat' => 'Fattura proforma',
		'InvoiceRef' => 'Rif. Fattura',
		'InvoiceReplacementAsk' => 'Sostituzione fattura per fattura',
		'InvoiceReplacementDesc' => 'La <b>sostituzione fattura</b> è utilizzata per annullare e sostituire completamente una fattura non ancora pagata.<br/><br/>Nota: Solo una fattura non pagata può essere sostituita. Se non è già stata chiusa, questa verrà resa automaticamente "abbandonata".',
		'InvoiceReplacement' => 'Sostituzione fattura',
		'Invoices' => 'Fatture',
		'InvoiceStandardAsk' => 'Fattura Standard',
		'InvoiceStandardDesc' => 'Questo tipo di fattura è la fattura più comune.',
		'InvoiceStandard' => 'Fattura Standard',
		'InvoiceStatus' => 'Stato Fattura',
		'LastBills' => 'Ultime %s fatture',
		'LastCustomersBills' => 'Ultime %s fatture attive',
		'LastSuppliersBills' => 'Ultime %s fatture fornitori',
		'LawApplicationPart1' => 'Con l\'applicazione della legge 80.335 del 12/05/80',
		'LawApplicationPart2' => 'I beni restano di proprietà della',
		'LawApplicationPart3' => 'il venditore fino alla completa riscossione',
		'LawApplicationPart4' => 'del loro prezzo.',
		'LimitedLiabilityCompanyCapital' => 'SRL con capitale di',
		'MenuChequeDeposits' => 'Depositi assegni',
		'MenuCheques' => 'Assegni',
		'MenuChequesReceipts' => 'Ricezione assegni',
		'MenuToValid' => 'Da validare',
		'NbOfPayments' => 'Numero pagamenti',
		'NetToBePaid' => 'Netto a pagare',
		'NewBill' => 'Nuova fattura',
		'NewChequeDeposit' => 'Nuovo deposito',
		'NewGlobalDiscount' => 'Nuovo sconto globale',
		'NewRelativeDiscount' => 'Nuovo sconto relativo',
		'NoDraftBills' => 'Nessuna bozza di fatture',
		'NoInvoice' => 'Nessuna fattura',
		'NoInvoiceToCorrect' => 'Nessuna fattura da correggere',
		'NonPercuRecuperable' => 'Non recuperabile',
		'NoOtherDraftBills' => 'Nessun\'altra bozza di fatture',
		'NoReplacableInvoice' => 'Nessuna fattura sostituibile',
		'NoSupplierBillsUnpaid' => 'Nessuna fattura fornitori non pagata',
		'NotConsumed' => 'Non consumato',
		'NoteReason' => 'Note/Motivo',
		'NumberOfBillsByMonthHT' => 'Numero di fatture per mese (al netto delle imposte)',
		'NumberOfBillsByMonth' => 'Numero di fatture per mese',
		'NumberOfBills' => 'Numero di fatture',
		'Of' => 'del',
		// orion								   
		'OrionNumRefModelDesc1' => 'Restituisce il numero sotto il formato FAYYNNNNN dove AA è l\'anno e l\'incremento NNNNN numero a partire da 1.',
		'OrionNumRefModelDesc2' => 'L\'anno è aumentato di 1, senza che uno di inizializzazione a zero per l\'inizio dell\'anno fiscale.',
		'OrionNumRefModelDesc3' => 'Definire la variabile SOCIETE_FISCAL_MONTH_START con il mese all\'inizio del l\'anno fiscale, ad esempio: 9 per il mese di settembre.',
		'OrionNumRefModelDesc4' => 'In questo esempio, avremo il 1 ° settembre 2006, di una fattura denominata FA700354.',
		'OtherBills' => 'Altre fatture',
		'PayedByThisPayment' => 'Pagato con questo pagamento',
		'PaymentAmount' => 'Importo del pagamento',
		'PaymentBack' => 'Rimborso',
		'PaymentByChequeOrderedTo' => 'I pagamenti mediante assegno vanno intestati a %s e spediti a',
		'PaymentByChequeOrderedToShort' => 'Pagamenti mediante assegno intestati a',
		'PaymentByTransferOnThisBankAccount' => 'Pagamenti tramite bonifico sul seguente C. C. bancario',
		'PaymentCondition30D' => 'Pagamento a 30 giorni',
		'PaymentCondition30DENDMONTH' => 'Pagamento a 30 giorni alla fine del mese',
		'PaymentCondition5050' => 'Pagamento 50%% all\'ordine e 50%% alla consegna',
		'PaymentCondition60D' => 'Pagamento a 60 giorni',
		'PaymentCondition60DENDMONTH' => 'Pagamento a 60 giorni alla fine del mese',
		'PaymentConditionANTICIPE' => 'Pagamento anticipato all\'ordine',
		'PaymentConditionLIVRAISON' => 'Pagamento alla consegna',
		'PaymentConditionRECEP' => 'Pagamento immediato',
		'PaymentConditionShort30D' => 'a 30 giorni',
		'PaymentConditionShort30DENDMONTH' => 'a 30 giorni a fine mese',
		'PaymentConditionShort5050' => '50 e 50',
		'PaymentConditionShort60D' => 'a 60 giorni',
		'PaymentConditionShort60DENDMONTH' => 'a 60 giorni a fine mese',
		'PaymentConditionShortANTICIPE' => 'All\'ordine',
		'PaymentConditionShortLIVRAISON' => 'Alla consegna',
		'PaymentConditionShortRECEP' => 'Immediato',
		'PaymentConditionsShort' => 'Ter. di pagamento',
		'PaymentConditions' => 'Termine di pagamento',
		'PaymentHigherThanReminderToPay' => 'Pagamento superiore alla rimanenza da pagare',
		'PaymentId' => 'Id Pagamento',
		'PaymentInvoiceRef' => 'Pagamento fattura %s',
		'PaymentMode' => 'Tipo di pagamento',
		'PaymentNumber' => 'Numero del pagamento',
		'Payment' => 'Pagamento',
		'PaymentRule' => 'Regola pagamento',
		'PaymentsAlreadyDone' => 'Pagamenti già fatti',
		'PaymentsBack' => 'Rimborsi',
		'Payments' => 'Pagamenti',
		'PaymentsReportsForYear' => 'Report pagamenti per %s',
		'PaymentsReports' => 'Report pagamenti',
		'PaymentStatusToValidShort' => 'Da convalidare',
		'PaymentTypeCB' => 'Carta di credito',
		'PaymentTypeCHQ' => 'Assegno',
		'PaymentTypeLIQ' => 'Pagamento in contanti',
		'PaymentTypePRE' => 'Domiciliazione bancaria',
		'PaymentTypeShortCB' => 'Carta di cred.',
		'PaymentTypeShortCHQ' => 'Assegno',
		'PaymentTypeShortLIQ' => 'Contanti',
		'PaymentTypeShortPRE' => 'Domicil. banc.',
		'PaymentTypeShortTIP' => 'RID Ord. perm.',
		'PaymentTypeShortTRA' => 'Cambiale',
		'PaymentTypeShortVAD' => 'Pagamen. online',
		'PaymentTypeShortVIR' => 'Bon. banc.',
		'PaymentTypeTIP' => 'RID Ordine permanente',
		'PaymentTypeTRA' => 'Cambiale tratta',
		'PaymentTypeVAD' => 'Pagamento on-line',
		'PaymentTypeVIR' => 'Bonifico bancario',
		'PDFBerniqueDescription' => 'Modello di fattura Bernique.',
		'PDFBigorneauDescription' => 'Modello di fattura Bigorneau.',
		'PDFBulotDescription' => 'Modello di fattura Bulot.',
		'PDFCrabeDescription' => 'Modello di fattura Crabe. (Modello raccomandatoi)',
		'PDFHuitreDescription' => 'Modello di fattura Huitre.',
		'PDFLinceDescription' => 'Modello di fattura completa di RE e IRPF per il mercato spagnolo.',
		'PDFOursinDescription' => 'Modello di fattura oursin.',
		'PDFTourteauDescription' => 'Modello di fattura Tourteau.',
		'PhoneNumber' => 'Tel',
		// pluton							   
		'PlutonNumRefModelDesc1' => 'Restituisce un numero di fattura personalizzabile in base ad una maschera definita.',
		'PredefinedInvoices' => 'Fatture predefinite',
		'Prélèvements' => 'Ordine permanente',
		'Prélèvements' => 'Ordini permanenti',
		'PrettyLittleSentence' => 'L\'importo dei pagamenti in assegni emessi in nome mio viene accettato in qualità di membro di una associazione approvata dalla Amministrazione fiscale.',
		'PriceBase' => 'Prezzo base',
		'ProformaBill' => 'Fattura proforma:',
		'ReasonDiscount' => 'Motivo dello sconto',
		'ReceivedCustomersPayments' => 'Pagamenti ricevuti dai clienti',
		'ReceivedCustomersPaymentsToValid' => 'Pagamenti ricevuti dai clienti da convalidare',
		'ReceivedPayments' => 'Pagamenti ricevuti',
		'Reduction' => 'Sconto',
		'ReductionShort' => 'Sconto',
		'Reductions' => 'Sconti',
		'ReductionsShort' => 'Sconti',
		'RefBill' => 'Rif. fattura',
		'RegulatedOn' => 'Regolamentato su',
		'RelatedBill' => 'Fattura correlata',
		'RelatedBills' => 'Fatture correlate',
		'RelatedCommercialProposals' => 'Proposte commerciali correlate',
		'RelativeDiscount' => 'Sconto relativo',
		'RemainderToBill' => 'Restante da fatturare',
		'RemainderToPay' => 'Resto da pagare',
		'RemainderToTake' => 'Restante da incassare',
		'RemoveDiscount' => 'Eiminare sconto',
		'RepeatableInvoice' => 'Fattura ripetibile',
		'RepeatableInvoices' => 'Fatture ripetibili',
		'Repeatable' => 'Ripetibile',
		'Repeatables' => 'Ripetibili',
		'ReplacedByInvoice' => 'Sostituita dalla fattura %s',
		'ReplaceInvoice' => 'Sostituire fattura %s',
		'ReplacementByInvoice' => 'Sostituzione della fattura',
		'ReplacementInvoice' => 'Sostituzione fattura',
		'Reported' => 'Segnalato',
		'Residence' => 'Domiciliazione',
		'SearchACustomerInvoice' => 'Cerca una fattura attiva',
		'SearchASupplierInvoice' => 'Cerca una fattura fornitore',
		'SendBillByMail' => 'Invia fattura via email',
		'SendBillRef' => 'Invia fattura %s',
		'SendByMail' => 'Email',
		'SendRemindByMail' => 'Promemoria tramite email',
		'SendReminderBillByMail' => 'Inviare promemoria via email',
		'SendReminderBillRef' => 'Invia fattura %s (promemoria)',
		'SendTo' => 'spedire a',
		'SetConditions' => 'Imposta le condizioni di pagamento',
		'SetDate' => 'Imposta data',
		'SetMode' => 'Imposta la modalità di pagamento',
		'ShowBill' => 'Visualizza fattura',
		'ShowDiscount' => 'Visualizza sconto',
		'ShowInvoiceAvoir' => 'Visualizza nota di credito',
		'ShowInvoiceDeposit' => 'Visualizza deposito fattura',
		'ShowInvoiceReplace' => 'Visualizza la fattura sostitutiva',
		'ShowInvoice' => 'Visualizza fattura',
		'ShowPayment' => 'Visualizza pagamento',
		'ShowSocialContribution' => 'Visualizza contributi',
		'ShowUnpaidAll' => 'Mostra tutte le fatture non pagate',
		'ShowUnpaidLateOnly' => 'Visualizza solo fatture con pagamento in ritardo',
		'SplitDiscount' => 'Dividi lo sconto in due',
		'StandingOrder' => 'Ordine permanente',
		'StandingOrders' => 'Ordini permanenti',
		'SupplierBill' => 'Fattura fornitore',
		'SupplierBills' => 'Fatture fornitori',
		'SupplierBillsToPay' => 'Fatture fornitori da pagare',
		'SupplierInvoice' => 'Fattura fornitore',
		'SupplierPayments' => 'Pagamenti fornitori',
		'SuppliersDraftInvoices' => 'Bozze di fattura fornitore',
		'SuppliersInvoices' => 'Fatture fornitori',
		'TeleFax' => 'Fax',
		'TerreNumRefModelDesc1' => 'Restituisce un numero nel formato %syymm-nnnn per le fatture e %syymm-nnnn per le note di credito, dove yy è l\'anno, mm è il mese e nnnn è una sequenza progressiva che non si azzera',
		'TerreNumRefModelError' => 'Un altro modello di numerazione con sequenza $ syymm è già esistente e non è compatibile con questo modello. Rimuovere o rinominare per attivare questo modulo.',
		// titan								   
		'TitanNumRefModelDesc1' => 'Restituisce il numero con cui FAYYNNNNN formato AA è l\'anno e NNNNN è l\'incremento a partire dal numero 1.',
		'TitanNumRefModelDesc2' => 'L\'anno è incrementato di 1 e il numero incremento è inizializzato a zero per l\'inizio dell\'anno fiscale.',
		'TitanNumRefModelDesc3' => 'Definire la variabile SOCIETE_FISCAL_MONTH_START secondo il mese di inizio dell\'anno fiscale, ad esempio: 9 per il mese di settembre.',
		'TitanNumRefModelDesc4' => 'In questo esempio, avremo una fattura denominata FA0700001 il 1° settembre 2006',
		'ToBill' => 'Da fatturare',
		'TotalOfTwoDiscountMustEqualsOriginal' => 'Il totale di due nuovi sconti deve essere pari allo sconto originale.',
		'TypeAmountOfEachNewDiscount' => 'Importo in input per ognuna delle due parti:',
		'TypeContact_facture_external_BILLING' => 'Contatto fatturazioni clienti',
		'TypeContact_facture_external_SERVICE' => 'Contatto servizio clienti',
		'TypeContact_facture_external_SHIPPING' => 'Contatto spedizioni clienti',
		'TypeContact_invoice_supplier_external_BILLING' => 'Contatto fatturazioni fornitori',
		'TypeContact_invoice_supplier_external_SERVICE' => 'Contatto servizio fornitori',
		'TypeContact_invoice_supplier_external_SHIPPING' => 'Contatto spedizioni fornitori',
		'TypeContact_invoice_supplier_internal_SALESREPFOLL' => 'Responsabile pagamenti fornitori',
		'TypeContact_facture_internal_SALESREPFOLL' => 'Responsabile pagamenti clienti',
		'Unpaid' => 'Non pagato',
		'UnvalidateBill' => 'Invalida fattura',
		'UsBillingContactAsIncoiveRecipientIfExist' => 'Utilizza l\'indirizzo del contatto associato alla fattura come indirizzo di fatturazione invece di quello impostato per l\'azienda',
		'UseCreditNoteInInvoicePayment' => 'Riduci l\'ammontare del pagamento con la nota di credito',
		'UseCredit' => 'Utilizza il credito',
		'UsedByInvoice' => 'Usato per pagare fattura %s',
		'UseDiscount' => 'Usa lo sconto',
		'ValidateBill' => 'Convalida fattura',
		'ValidateInvoice' => 'Convalida fattura',
		'ValidatePayment' => 'Convalidare questo pagamento?',
		'VATIsNotUsedForInvoice' => '* Non applicabile IVA art-293B del CGI',
		'WatermarkOnDraftBill' => 'Filigrana sulla bozza di fatture (se presente)',
);
?>