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
		'Bill' => 'חשבונית',
		'Bills' => 'חשבוניות',
		'BillsCustomers' => 'לקוחות של חשבוניות',
		'BillsCustomer' => 'לקוח של החשבונית',
		'BillsSuppliers' => 'הספק של חשבוניות',
		'BillsCustomersUnpaid' => 'לקוחות ללא תשלום של חשבוניות',
		'BillsCustomersUnpaidForCompany' => 'לקוחות ללא תשלום של חשבוניות עבור %s',
		'BillsSuppliersUnpaid' => 'הספק של חשבוניות שלא שולמו',
		'BillsSuppliersUnpaidForCompany' => 'הספק ללא תשלום של חשבוניות עבור %s',
		'BillsUnpaid' => 'ללא תשלום',
		'BillsLate' => 'בסוף שנות תשלומי',
		'BillsStatistics' => 'לקוחות של חשבוניות הסטטיסטיקות',
		'BillsStatisticsSuppliers' => 'הספק של חשבוניות הסטטיסטיקות',
		'DisabledBecauseNotErasable' => 'לא זמין כי לא ניתן למחוק',
		'InvoiceStandard' => 'תקן חשבונית',
		'InvoiceStandardAsk' => 'תקן חשבונית',
		'InvoiceStandardDesc' => 'סוג זה של החשבונית היא חשבונית משותפת.',
		'InvoiceDeposit' => 'הפקדה החשבונית',
		'InvoiceDepositAsk' => 'הפקדה החשבונית',
		'InvoiceDepositDesc' => 'סוג זה של החשבונית נעשית כאשר הפיקדון התקבל.',
		'InvoiceProForma' => 'חשבונית פרופורמה',
		'InvoiceProFormaAsk' => 'חשבונית פרופורמה',
		'InvoiceProFormaDesc' => '<b>חשבונית פרופורמה</b> הוא תמונה של החשבונית נכון, אבל אין שום ערך חשבונאי.',
		'InvoiceReplacement' => 'החלפת חשבונית',
		'InvoiceReplacementAsk' => 'החלפת חשבונית עבור חשבונית',
		'InvoiceReplacementDesc' => '<b>חשבונית החלפת</b> משמש לבטל ולהחליף לחלוטין את החשבונית ללא תשלום קיבל כבר. <br><br> הערה: רק חשבונית ללא תשלום על זה יכול להיות מוחלף. אם לא סגור, זה ייסגר באופן אוטומטי &quot;נטוש&quot;.',
		'InvoiceAvoir' => 'כתב זכויות',
		'InvoiceAvoirAsk' => 'הערה אשראי לתקן חשבונית',
		'InvoiceAvoirDesc' => '<b>הערה האשראי</b> חשבונית שלילית להשתמש כדי לפתור העובדה בחשבונית יש סכום שונה מהסכום ששולם באמת (כי הלקוח שילם יותר מדי על ידי טעות, או לא שילם לחלוטין מאז הוא חזר כמה מוצרים לדוגמא).',
		'ReplaceInvoice' => 'החלף %s חשבוניות',
		'ReplacementInvoice' => 'החלפת חשבונית',
		'ReplacedByInvoice' => 'הוחלף על ידי %s חשבוניות',
		'ReplacementByInvoice' => 'הוחלף על ידי החשבון',
		'CorrectInvoice' => '%s חשבוניות לא נכון',
		'CorrectInvoice' => '%s חשבוניות לא נכון',
		'CorrectionInvoice' => 'תיקון חשבונית',
		'UsedByInvoice' => 'נהג לשלם %s חשבוניות',
		'ConsumedBy' => 'הנצרכת על ידי',
		'NotConsumed' => 'לא נצרך',
		'NoReplacableInvoice' => 'אין חשבוניות replacable',
		'NoInvoiceToCorrect' => 'לא החשבונית לתקן',
		'InvoiceHasAvoir' => 'תוקן על ידי אחת או כמה חשבוניות',
		'CardBill' => 'חשבונית כרטיס',
		'PredefinedInvoices' => 'מוגדרים מראש חשבוניות',
		'Invoice' => 'חשבונית',
		'Invoices' => 'חשבוניות',
		'InvoiceLine' => 'חשבונית קו',
		'InvoiceCustomer' => 'לקוחות החשבונית',
		'CustomerInvoice' => 'לקוחות החשבונית',
		'CustomersInvoices' => 'לקוחות של חשבוניות',
		'SupplierInvoice' => 'חשבונית הספק',
		'SuppliersInvoices' => 'הספק של חשבוניות',
		'SupplierBill' => 'חשבונית הספק',
		'SupplierBills' => 'חשבונית אנשי קשר',
		'Payment' => 'תשלום',
		'PaymentBack' => 'תשלום בחזרה',
		'Payments' => 'תשלומים',
		'PaymentsBack' => 'תשלומים גב',
		'DatePayment' => 'תאריך תשלום',
		'DeletePayment' => 'מחק את התשלום',
		'ConfirmDeletePayment' => 'האם אתה בטוח שברצונך למחוק זאת בתשלום?',
		'ConfirmConvertToReduc' => 'האם אתה רוצה להמיר את שטר אשראי או הפקדה הנחה מוחלטת? <br> הסכום יהיה כל כך יישמר בין הנחות כל ויכול לשמש הנחה על החשבונית הנוכחית או העתידית של לקוח זה.',
		'SupplierPayments' => 'תשלומים לספקים',
		'ReceivedPayments' => 'קיבלו תשלומים',
		'ReceivedCustomersPayments' => 'תשלומים שהתקבלו מלקוחות',
		'ReceivedCustomersPaymentsToValid' => 'לקוחות שקיבלו תשלומים לאימות',
		'PaymentsReportsForYear' => 'תשלומי דוחות %s',
		'PaymentsReports' => 'תשלומי דוחות',
		'PaymentsAlreadyDone' => 'תשלומים עשית',
		'PaymentRule' => 'תשלום כלל',
		'PaymentMode' => 'סוג התשלום',
		'PaymentConditions' => 'תשלום טווח',
		'PaymentConditionsShort' => 'תשלום טווח',
		'PaymentAmount' => 'סכום לתשלום',
		'PaymentHigherThanReminderToPay' => 'תשלום גבוה יותר מאשר תזכורת לשלם',
		'HelpPaymentHigherThanReminderToPay' => 'שימו לב, את סכום התשלום של אחד או יותר החשבונות הוא גבוה יותר מאשר שאר לשלם. <br> ערוך רשומה שלך, אחרת מאשר לחשוב על יצירת מכתב אשראי של עודף קיבל עבור כל החשבוניות מדושנת שכר.',
		'ClassifyPaid' => 'לסווג את &quot;שולם&quot;',
		'ClassifyPaidPartially' => 'לסווג את &quot;תשלום חלקי&quot;',
		'ClassifyCanceled' => 'לסווג &quot;נטושים&quot;',
		'ClassifyClosed' => 'לסווג את &quot;סגור&quot;',
		'CreateBill' => 'יצירת חשבונית',
		'AddBill' => 'הוסף חשבונית או פתק אשראי',
		'DeleteBill' => 'מחק את החשבונית',
		'SearchACustomerInvoice' => 'חפש את החשבונית ללקוח',
		'SearchASupplierInvoice' => 'חפש את חשבונית הספק',
		'CancelBill' => 'ביטול חשבונית',
		'SendRemindByMail' => 'שלח תזכורת בדואר אלקטרוני',
		'DoPayment' => 'האם התשלום',
		'DoPaymentBack' => 'האם חזרה תשלום',
		'ConvertToReduc' => 'להמיר הנחה בעתיד',
		'EnterPaymentReceivedFromCustomer' => 'הזן קיבל את התשלום מהלקוח',
		'EnterPaymentDueToCustomer' => 'את התשלום בשל לקוחות',
		'DisabledBecauseRemainderToPayIsZero' => 'לא זמין בגלל שאר לשלם הוא אפס',
		'Amount' => 'כמות',
		'PriceBase' => 'מחיר הבסיס',
		'BillStatus' => 'חשבונית מצב',
		'BillStatusDraft' => 'טיוטה (צריך להיות מאומת)',
		'BillStatusPaid' => 'בתשלום',
		'BillStatusPaidBackOrConverted' => 'בתשלום או להמרה הנחה',
		'BillStatusConverted' => 'בתשלום (מוכן החשבונית הסופי)',
		'BillStatusCanceled' => 'נטוש',
		'BillStatusValidated' => 'תוקף (צריך להיות משולם)',
		'BillStatusStarted' => 'העבודה',
		'BillStatusNotPaid' => 'לא שילם',
		'BillStatusClosedUnpaid' => 'סגור (ללא תשלום)',
		'BillStatusClosedPaidPartially' => 'בתשלום (חלקי)',
		'BillShortStatusDraft' => 'טיוטה',
		'BillShortStatusPaid' => 'בתשלום',
		'BillShortStatusPaidBackOrConverted' => 'מעובד',
		'BillShortStatusConverted' => 'מעובד',
		'BillShortStatusCanceled' => 'נטוש',
		'BillShortStatusValidated' => 'תוקף',
		'BillShortStatusStarted' => 'העבודה',
		'BillShortStatusNotPaid' => 'לא שילם',
		'BillShortStatusClosedUnpaid' => 'סגור',
		'BillShortStatusClosedPaidPartially' => 'בתשלום (חלקי)',
		'PaymentStatusToValidShort' => 'כדי לאמת',
		'ErrorVATIntraNotConfigured' => 'מע&quot;מ מספר Intracommunautary שלא הוגדר עדיין',
		'ErrorNoPaiementModeConfigured' => 'אין מצב תשלום ברירת המחדל מוגדר. עבור ההתקנה מודול חשבונית לתקן את זה.',
		'ErrorCreateBankAccount' => 'צור חשבון הבנק, ולאחר מכן, עבור אל לוח התקנה של מודול חשבונית להגדיר מצבים תשלום',
		'ErrorBillNotFound' => '%s החשבונית אינה קיימת',
		'ErrorInvoiceAlreadyReplaced' => 'שגיאה, אתה מנסה לאמת את החשבונית להחליף %s חשבוניות. אבל זה כבר הוחלף %s חשבוניות.',
		'ErrorDiscountAlreadyUsed' => ', שגיאה הנחה כבר בשימוש',
		'ErrorInvoiceAvoirMustBeNegative' => 'שגיאה, חשבונית נכונה חייב להיות סכום שלילי',
		'ErrorInvoiceOfThisTypeMustBePositive' => 'שגיאה, זה סוג של החשבונית חייב להיות סכום חיובי',
		'ErrorCantCancelIfReplacementInvoiceNotValidated' => 'שגיאה, לא ניתן לבטל חשבונית הוחלף חשבונית אחרת, הוא עדיין במצב טיוטה',
		'BillFrom' => 'מן',
		'BillTo' => 'הצעת החוק',
		'ActionsOnBill' => 'פעולות על החשבונית',
		'NewBill' => 'החשבונית החדשה',
		'Prélèvements' => 'פקודת קבע',
		'Prélèvements' => 'הוראות קבע',
		'LastBills' => '%s חשבוניות אחרונות',
		'LastCustomersBills' => '%s האחרונים חשבוניות ללקוחות',
		'LastSuppliersBills' => 'האחרונים ספקים %s חשבוניות',
		'AllBills' => 'כל החשבוניות',
		'OtherBills' => 'אחרים חשבוניות',
		'DraftBills' => 'טיוטת חשבוניות',
		'CustomersDraftInvoices' => 'לקוחות טיוטת חשבוניות',
		'SuppliersDraftInvoices' => 'טיוטת חשבוניות ספקים',
		'Unpaid' => 'ללא תשלום',
		'ConfirmDeleteBill' => 'האם אתה בטוח שברצונך למחוק זאת חשבונית?',
		'ConfirmValidateBill' => 'האם אתה בטוח שברצונך לאמת את החשבונית עם <b>%s</b> התייחסות?',
		'ConfirmUnvalidateBill' => 'האם אתה בטוח שאתה רוצה לשנות <b>%s</b> החשבונית למעמד טיוטה?',
		'ConfirmClassifyPaidBill' => 'האם אתה בטוח שאתה רוצה לשנות <b>%s</b> החשבונית למעמד תשלום?',
		'ConfirmCancelBill' => 'האם אתה בטוח שברצונך לבטל <b>%s</b> חשבונית?',
		'ConfirmCancelBillQuestion' => 'למה אתה רוצה לסווג את החשבונית &quot;נטש&quot;?',
		'ConfirmClassifyPaidPartially' => 'האם אתה בטוח שאתה רוצה לשנות <b>%s</b> החשבונית למעמד תשלום?',
		'ConfirmClassifyPaidPartiallyQuestion' => 'חשבונית זו לא שולמה לחלוטין. מה הן הסיבות לך לסגור את החשבונית?',
		'ConfirmClassifyPaidPartiallyReasonAvoir' => 'שאר לשלם <b>(%s %s)</b> הוא העניק הנחה כי התשלום נעשה לפני טווח. אני להסדיר את המע&quot;מ עם פתק זיכוי.',
		'ConfirmClassifyPaidPartiallyReasonDiscountNoVat' => 'שאר לשלם <b>(%s %s)</b> הוא העניק הנחה כי התשלום נעשה לפני טווח. אני מקבלת את מה להפסיד מע&quot;מ על הנחה זו.',
		'ConfirmClassifyPaidPartiallyReasonDiscountVat' => 'שאר לשלם <b>(%s %s)</b> הוא העניק הנחה כי התשלום נעשה לפני טווח. אני להתאושש מע&quot;מ על הנחה זו ללא פתק זיכוי.',
		'ConfirmClassifyPaidPartiallyReasonBadCustomer' => 'רע לקוחות',
		'ConfirmClassifyPaidPartiallyReasonProductReturned' => 'מוצרים חלקי חזר',
		'ConfirmClassifyPaidPartiallyReasonOther' => 'סכום נטש מסיבה אחרת',
		'ConfirmClassifyPaidPartiallyReasonDiscountNoVatDesc' => 'בחירה זו אפשרית אם החשבונית סופקו עם תגובה מתאימה. (דוגמה «רק את המס המתאים מחיר כי כבר שילם למעשה מעניקה זכויות ניכוי»)',
		'ConfirmClassifyPaidPartiallyReasonDiscountVatDesc' => 'במדינות מסוימות, בחירה זה יכול להיות אפשרי רק אם החשבונית שלך מכיל הערה נכונה.',
		'ConfirmClassifyPaidPartiallyReasonAvoirDesc' => 'השתמש הבחירה אם זה לא מתאים לכל',
		'ConfirmClassifyPaidPartiallyReasonBadCustomerDesc' => '<b>לקוח רע</b> הוא לקוח המסרבים לשלם את חובו.',
		'ConfirmClassifyPaidPartiallyReasonProductReturnedDesc' => 'בחירה זו נעשה שימוש כאשר התשלום אינו שלם, כי חלק מהמוצרים הוחזרו',
		'ConfirmClassifyPaidPartiallyReasonOtherDesc' => 'השתמש הבחירה אם זה כל מה שלא מתאים, למשל בסיטואציה הבאה: <br> - התשלום לא הושלם בגלל כמה מוצרים נשלחו בחזרה <br> - כמות טען חשוב גם בגלל הנחה נשכח <br> בכל מקרה, כמות יתר טען יש לתקן במערכת הנהלת חשבונות על ידי יצירת פתק אשראי.',
		'ConfirmClassifyAbandonReasonOther' => 'אחר',
		'ConfirmClassifyAbandonReasonOtherDesc' => 'בחירה זו תשמש בכל המקרים האחרים. כך, למשל, כי אתה מתכנן ליצור חשבונית להחליף.',
		'ConfirmCustomerPayment' => 'אתה מאשר את התשלום עבור הזנה %s <b>%s?</b>',
		'ConfirmValidatePayment' => 'האם אתה בטוח שברצונך לאמת תשלום זה? השינוי לא יכול להתבצע פעם אחת התשלום תוקף.',
		'ValidateBill' => 'אימות החשבונית',
		'UnvalidateBill' => 'Unvalidate חשבונית',
		'NumberOfBills' => 'Nb של חשבוניות',
		'NumberOfBillsByMonth' => 'Nb של חשבוניות לפי חודשים',
		'AmountOfBills' => 'סכום החשבוניות',
		'AmountOfBillsByMonthHT' => 'סכום החשבוניות של חודש (נטו ממס)',
		'ShowSocialContribution' => 'הצג תרומה חברתית',
		'ShowBill' => 'הצג חשבונית',
		'ShowInvoice' => 'הצג חשבונית',
		'ShowInvoiceReplace' => 'הצג החלפת החשבונית',
		'ShowInvoiceAvoir' => 'הצג לב אשראי',
		'ShowInvoiceDeposit' => 'הצג חשבונית פיקדון',
		'ShowPayment' => 'הצג התשלום',
		'File' => 'קובץ',
		'AlreadyPaid' => 'כבר שילם',
		'AlreadyPaidNoCreditNotesNoDeposits' => 'שולם כבר (בלי הערות אשראי ופיקדונות)',
		'Abandoned' => 'נטוש',
		'RemainderToPay' => 'שאר לשלם',
		'RemainderToTake' => 'שאר לקחת',
		'AmountExpected' => 'כמות טען',
		'ExcessReceived' => 'עודף קיבל',
		'EscompteOffered' => 'דיסקונט הציע (לפני תשלום טווח)',
		'SendBillRef' => 'שלח %s חשבוניות',
		'SendReminderBillRef' => 'שלח %s חשבוניות (תזכורת)',
		'StandingOrders' => 'הוראות קבע',
		'StandingOrder' => 'פקודת קבע',
		'NoDraftBills' => 'אין טיוטת חשבוניות',
		'NoOtherDraftBills' => 'אין טיוטת חשבוניות אחרים',
		'RefBill' => 'חשבונית REF',
		'ToBill' => 'הצעת החוק',
		'RemainderToBill' => 'יתר על הצעת החוק',
		'SendBillByMail' => 'שלח חשבונית במייל',
		'SendReminderBillByMail' => 'שלח תזכורת בדואר אלקטרוני',
		'RelatedCommercialProposals' => 'הצעות מסחריות הקשורות',
		'MenuToValid' => 'כדי בתוקף',
		'DateMaxPayment' => 'עקב לפני תשלום',
		'DateEcheance' => 'תאריך יעד מגבלת',
		'DateInvoice' => 'תאריך חשבונית',
		'NoInvoice' => 'לא חשבונית',
		'ClassifyBill' => 'לסווג את החשבונית',
		'NoSupplierBillsUnpaid' => 'אין ספקים חשבוניות שלא שולמו',
		'SupplierBillsToPay' => 'חשבוניות ספקים לשלם',
		'CustomerBillsUnpaid' => 'שלא שולמו ללקוחות חשבוניות',
		'DispenseMontantLettres' => 'הצעת החוק שנוסחה על ידי mechanographical פטורים סדר האותיות',
		'DispenseMontantLettres' => 'את החשבוניות בכתב באמצעות נהלים mecanographic הם לוותר בצו באותיות',
		'NonPercuRecuperable' => 'אי - ההשבה',
		'SetConditions' => 'הגדרת תנאי התשלום',
		'SetMode' => 'הגדרת מצב תשלום',
		'SetDate' => 'קבע תאריך',
		'Billed' => 'מחויב',
		'RepeatableInvoice' => 'מוגדרים מראש חשבונית',
		'RepeatableInvoices' => 'מוגדרים מראש חשבוניות',
		'Repeatable' => 'מוגדרים מראש',
		'Repeatables' => 'מוגדרים מראש',
		'ChangeIntoRepeatableInvoice' => 'להמיר מוגדרים מראש',
		'CreateRepeatableInvoice' => 'צור מוגדרים מראש חשבונית',
		'CreateFromRepeatableInvoice' => 'יצירה מתוך חשבונית מוגדרים מראש',
		'CustomersInvoicesAndInvoiceLines' => 'לקוחות חשבוניות וקווים של חשבוניות',
		'CustomersInvoicesAndPayments' => 'לקוחות חשבוניות ותשלומים',
		'ExportDataset_invoice_1' => 'חשבוניות לקוחות רשימת קווי של חשבוניות',
		'ExportDataset_invoice_2' => 'לקוחות חשבוניות ותשלומים',
		'ProformaBill' => 'Proforma ביל:',
		'Reduction' => 'הפחתה',
		'ReductionShort' => 'Reduc.',
		'Reductions' => 'הפחתות',
		'ReductionsShort' => 'Reduc.',
		'Discount' => 'הנחה',
		'Discounts' => 'הנחות',
		'AddDiscount' => 'צור הנחה',
		'AddRelativeDiscount' => 'צור הנחה יחסית',
		'EditRelativelDiscount' => 'עריכת הנחה relatvie',
		'AddGlobalDiscount' => 'צור הנחה מוחלטת',
		'EditGlobalDiscounts' => 'עריכת הנחות מוחלטות',
		'AddCreditNote' => 'צור הערה אשראי',
		'ShowDiscount' => 'הצג הנחה',
		'RelativeDiscount' => 'יחסית הנחה',
		'GlobalDiscount' => 'גלובל הנחה',
		'CreditNote' => 'כתב זכויות',
		'CreditNotes' => 'אשראי הערות',
		'Deposit' => 'פקדון',
		'Deposits' => 'פיקדונות',
		'DiscountFromCreditNote' => 'דיסקונט מ %s הודעת הזיכוי',
		'DiscountFromDeposit' => 'תשלומים %s חשבוניות פיקדון',
		'AbsoluteDiscountUse' => 'סוג זה של אשראי ניתן להשתמש בחשבונית לפני האימות שלה',
		'CreditNoteDepositUse' => 'חשבונית יש תוקף להשתמש מלך אשראי',
		'NewGlobalDiscount' => 'הנחה מוחלטת חדש',
		'NewRelativeDiscount' => 'הנחה יחסית חדש',
		'NoteReason' => 'הערה / סיבה',
		'ReasonDiscount' => 'טעם',
		'DiscountOfferedBy' => 'שניתן על ידי',
		'DiscountStillRemaining' => 'הנחות עדיין הנותרים',
		'DiscountAlreadyCounted' => 'הנחות ספרתי כבר',
		'BillAddress' => 'ביל כתובת',
		'HelpEscompte' => 'הנחה זו היא הנחה הניתנת ללקוח מפני תשלומו נעשתה לפני טווח.',
		'HelpAbandonBadCustomer' => 'סכום זה נזנח (הלקוח אמור להיות לקוח רע) ונחשב רופף יוצאת דופן.',
		'HelpAbandonOther' => 'סכום זה נזנח מאז אירעה שגיאה (הלקוח חשבונית שגויה או הוחלף על ידי אחר, למשל)',
		'IdSocialContribution' => 'תרומה חברתית id',
		'PaymentId' => 'תשלום id',
		'InvoiceId' => 'חשבונית id',
		'InvoiceRef' => 'חשבונית השופט.',
		'InvoiceDateCreation' => 'יצירת חשבונית תאריך',
		'InvoiceStatus' => 'חשבונית מצב',
		'InvoiceNote' => 'חשבונית הערה',
		'InvoicePaid' => 'חשבונית תשלום',
		'PaymentNumber' => 'תשלום מספר',
		'RemoveDiscount' => 'הסר הנחה',
		'WatermarkOnDraftBill' => 'סימן מים על חשבוניות טיוטה (דבר אם ריקה)',
		'InvoiceNotChecked' => 'החשבונית לא נבחר',
		'CloneInvoice' => 'לשבט חשבונית',
		'ConfirmCloneInvoice' => 'האם אתה בטוח שאתה רוצה לשכפל את <b>%s</b> חשבונית?',
		'DisabledBecauseReplacedInvoice' => 'נכים פעולה כי החשבונית הוחלפה',
		'DescTaxAndDividendsArea' => 'אזור זה מציג סיכום של כל התשלומים שבוצעו על תרומות מס או חברתי. רק רשומות עם תשלום קבוע במהלך השנה כלולים כאן.',
		'NbOfPayments' => 'נ.ב. התשלומים',
		'SplitDiscount' => 'פיצול הנחה 2',
		'ConfirmSplitDiscount' => 'האם אתה בטוח שברצונך לפצל זו הנחה %s <b>%s</b> ל -2 הנחות נמוכות יותר?',
		'TypeAmountOfEachNewDiscount' => 'הקלט סכום עבור כל אחד משני חלקים:',
		'TotalOfTwoDiscountMustEqualsOriginal' => 'בסך הכל הנחה של 2 החדש חייב להיות שווה סכום ההנחה המקורית.',
		'ConfirmRemoveDiscount' => 'האם אתה בטוח שברצונך להסיר את דיסקונט?',
		'RelatedBill' => 'קשורים חשבונית',
		'RelatedBills' => 'בנושא חשבוניות',
		'PaymentConditionShortRECEP' => 'מידי',
		'PaymentConditionRECEP' => 'מידי',
		'PaymentConditionShort30D' => '30 יום',
		'PaymentCondition30D' => '30 יום',
		'PaymentConditionShort30DENDMONTH' => '30 ימים בסוף החודש',
		'PaymentCondition30DENDMONTH' => '30 ימים בסוף החודש',
		'PaymentConditionShort60D' => '60 ימים',
		'PaymentCondition60D' => '60 ימים',
		'PaymentConditionShort60DENDMONTH' => '60 ימים בסוף החודש',
		'PaymentCondition60DENDMONTH' => '60 ימים בסוף החודש',
		'PaymentTypeVIR' => 'הפקדה בנקאית',
		'PaymentTypeShortVIR' => 'הפקדה בנקאית',
		'PaymentTypePRE' => 'הבנק כדי',
		'PaymentTypeShortPRE' => 'הבנק כדי',
		'PaymentTypeLIQ' => 'מזומנים',
		'PaymentTypeShortLIQ' => 'מזומנים',
		'PaymentTypeCB' => 'כרטיס אשראי',
		'PaymentTypeShortCB' => 'כרטיס אשראי',
		'PaymentTypeCHQ' => 'לבדוק',
		'PaymentTypeShortCHQ' => 'לבדוק',
		'PaymentTypeTIP' => 'טיפ',
		'PaymentTypeShortTIP' => 'טיפ',
		'PaymentTypeVAD' => 'על הקו תשלום',
		'PaymentTypeShortVAD' => 'על הקו תשלום',
		'PaymentTypeTRA' => 'ביל תשלום',
		'PaymentTypeShortTRA' => 'הצעת חוק',
		'BankDetails' => 'בנק פרטים',
		'BankCode' => 'קוד בנק',
		'DeskCode' => 'דלפק קוד',
		'BankAccountNumber' => 'מספר חשבון',
		'BankAccountNumberKey' => 'מפתח',
		'Residence' => 'Domiciliation',
		'IBANNumber' => 'מספר IBAN',
		'IBAN' => 'IBAN',
		'BIC' => 'BIC / SWIFT',
		'BICNumber' => 'BIC / מספר SWIFT',
		'ExtraInfos' => 'נוספות infos',
		'RegulatedOn' => 'פיקוח על',
		'ChequeNumber' => 'בדוק N °',
		'ChequeOrTransferNumber' => 'בדוק / ​​העברת N °',
		'ChequeMaker' => 'בדוק משדר',
		'ChequeBank' => 'בנק בדוק',
		'NetToBePaid' => 'נטו ישולם',
		'PhoneNumber' => 'תל',
		'FullPhoneNumber' => 'טלפון',
		'TeleFax' => 'פקס',
		'PrettyLittleSentence' => 'קבל את כמות התשלומים המגיעים על ידי בדיקות שהונפקו על שמי כחבר האגודה חשבונאות אושרה על ידי מינהל הכספים.',
		'IntracommunityVATNumber' => 'Intracommunity מספר מע&quot;מ',
		'PaymentByChequeOrderedTo' => 'בדוק תשלום (כולל מע&quot;מ) הם לפקודת %s לשלוח',
		'PaymentByChequeOrderedToShort' => 'בדוק תשלום (כולל מע&quot;מ) הם לפקודת',
		'SendTo' => 'נשלח',
		'PaymentByTransferOnThisBankAccount' => 'תשלום באמצעות העברה על חשבון הבנק הבאה',
		'VATIsNotUsedForInvoice' => '* מע&quot;מ לא ישים אמנות 293B של CGI',
		'LawApplicationPart1' => 'על ידי יישום החוק של 80.335 12/05/80',
		'LawApplicationPart2' => 'הטובין נשארים בבעלות',
		'LawApplicationPart3' => 'המוכר עד מלא לפדות של',
		'LawApplicationPart4' => 'המחיר.',
		'LimitedLiabilityCompanyCapital' => 'SARL עם הון של',
		'UseDiscount' => 'השתמש הנחה',
		'UseCredit' => 'השתמש אשראי',
		'UseCreditNoteInInvoicePayment' => 'להפחית את הסכום לשלם עם אשראי זה',
		'MenuChequeDeposits' => 'המחאות פיקדונות',
		'MenuCheques' => 'בדיקות',
		'MenuChequesReceipts' => 'המחאות קבלות',
		'NewChequeDeposit' => 'חדש הפקדה',
		'ChequesReceipts' => 'המחאות קבלות',
		'ChequesArea' => 'המחאות פיקדונות אזור',
		'ChequeDeposits' => 'המחאות פיקדונות',
		'Cheques' => 'בדיקות',
		'CreditNoteConvertedIntoDiscount' => 'הערה זו אשראי או חשבונית פיקדון הוסב %s',
		'UsBillingContactAsIncoiveRecipientIfExist' => 'השתמש חיוב הלקוח קשר כתובת במקום כתובת צד ג\'המקבל על חשבוניות',
		'ShowUnpaidAll' => 'הצג את כל חשבוניות שלא שולמו',
		'ShowUnpaidLateOnly' => 'הצג חשבוניות שלא שולמו רק בסוף שנות',
		'PaymentInvoiceRef' => 'חשבונית תשלום %s',
		'ValidateInvoice' => 'אימות החשבונית',
		'Cash' => 'מזומנים',
		'Reported' => 'נדחתה',
		'DisabledBecausePayments' => 'לא ניתן שכן אין תשלומים מסוימים',
		'CantRemovePaymentWithOneInvoicePaid' => 'לא ניתן להסיר תשלום מאז יש לפחות חשבונית אחת מסווגים שילם',
		'ExpectedToPay' => 'צפוי התשלום',
		'PayedByThisPayment' => 'שילם על ידי תשלום זה',
		'ClosePaidInvoicesAutomatically' => 'לסווג &quot;שילם&quot; את כל תקן או חשבוניות החלפת שילם entierely.',
		'AllCompletelyPayedInvoiceWillBeClosed' => 'כל חשבונית ללא להישאר לשלם ייסגר באופן אוטומטי למצב &quot;שילם&quot;.',
		'TypeContact_facture_internal_SALESREPFOLL' => 'לקוחות נציג הבאה למעלה החשבונית',
		'TypeContact_facture_external_BILLING' => 'חשבונית הלקוח קשר',
		'TypeContact_facture_external_SHIPPING' => 'משלוח לקוחות צור קשר',
		'TypeContact_facture_external_SERVICE' => 'צור קשר עם שירות הלקוחות',
		'TypeContact_invoice_supplier_internal_SALESREPFOLL' => 'נציג הספק הבאה למעלה החשבונית',
		'TypeContact_invoice_supplier_external_BILLING' => 'חשבונית הספק לתקשר',
		'TypeContact_invoice_supplier_external_SHIPPING' => 'משלוח הספק לתקשר',
		'TypeContact_invoice_supplier_external_SERVICE' => 'שירות הספק לתקשר',
		'PDFCrabeDescription' => 'חשבונית תבנית PDF Crabe. תבנית חשבונית מלאה (תבנית מומלצים)',
		'PDFOursinDescription' => 'חשבונית תבנית PDF Oursin. תבנית חשבונית מלאה (חלופה תבנית)',
		'TerreNumRefModelDesc1' => 'חזור נומרו עם פורמט %syymm-nnnn חשבוניות סטנדרטיים %syymm-nnnn להערות אשראי שבו yy הוא שנה, מ&quot;מ הוא חודש nnnn הוא רצף ללא הפסקה וללא חזרה 0',
		'TerreNumRefModelError' => 'ביל החל $ syymm כבר קיים, והוא אינו תואם מודל זה של רצף. להסיר אותה או לשנות אותה כדי להפעיל את מודול זה.',
);
?>