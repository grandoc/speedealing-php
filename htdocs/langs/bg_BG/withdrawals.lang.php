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

$withdrawals = array(
		'CHARSET' => 'UTF-8',
		'StandingOrdersArea' => 'Постоянни нареждания област',
		'CustomersStandingOrdersArea' => 'Клиентите постоянни нареждания област',
		'StandingOrders' => 'Постоянните поръчки',
		'StandingOrder' => 'Постоянните поръчки',
		'NewStandingOrder' => 'Нов постоянно нареждане',
		'StandingOrderToProcess' => 'За да обработвате',
		'StandingOrderProcessed' => 'Обработен',
		'Withdrawals' => 'Тегления',
		'Withdrawal' => 'Оттегляне',
		'WithdrawalsReceipts' => 'Отнемане постъпления',
		'WithdrawalReceipt' => 'Оттегляне получаването',
		'WithdrawalReceiptShort' => 'Получаване',
		'LastWithdrawalReceipts' => 'Последно постъпления %s отнемане',
		'WithdrawedBills' => 'Изтеглените фактури',
		'WithdrawalsLines' => 'Отнемане линии',
		'RequestStandingOrderToTreat' => 'Искане за постоянни нареждания за лечение',
		'RequestStandingOrderTreated' => 'Искане за нареждания за периодични преводи третират',
		'CustomersStandingOrders' => 'Клиентски поръчки постоянни',
		'CustomerStandingOrder' => 'Заявка на клиента състояние',
		'NbOfInvoiceToWithdraw' => 'Nb на фактура с искане за оттеглят',
		'NbOfInvoiceToWithdrawWithInfo' => 'Nb на фактура оттегли искането за клиенти, които имат определена информация за банкова сметка',
		'InvoiceWaitingWithdraw' => 'Фактура чака оттегли',
		'AmountToWithdraw' => 'Сума за оттегляне',
		'WithdrawsRefused' => 'Отказа Тегления',
		'NoInvoiceToWithdraw' => 'Нито един клиент фактура в режим на плащане &quot;се оттегли&quot; чака. Отидете на раздела &quot;Теглене&quot; във фактурата карта, за да отправят искане.',
		'ResponsibleUser' => 'Отговорност на потребителя',
		'WithdrawalsSetup' => 'Оттегляне настройка',
		'WithdrawStatistics' => 'Теглене на статистически данни',
		'WithdrawRejectStatistics' => 'Изтеглете отхвърлят статистически данни',
		'LastWithdrawalReceipt' => 'Последните %s отнемане постъпления',
		'MakeWithdrawRequest' => 'Уверете се оттегли искането',
		'ThirdPartyBankCode' => 'Код на трета страна банка',
		'ThirdPartyDeskCode' => 'Код на трета страна бюрото',
		'NoInvoiceCouldBeWithdrawed' => 'Не теглене фактура с успех. Уверете се, че фактура са дружества с валиден БАН.',
		'ClassCredited' => 'Класифицирайте кредитирани',
		'ClassCreditedConfirm' => 'Сигурен ли сте, че искате да класифицира тази получаване на отказ, кредитирани по вашата банкова сметка?',
		'TransData' => 'Дата Предаване',
		'TransMetod' => 'Метод Предаване',
		'Send' => 'Изпращам',
		'Lines' => 'Линии',
		'StandingOrderReject' => 'Издаде отхвърли',
		'InvoiceRefused' => 'Фактура отказа',
		'WithdrawalRefused' => 'Оттегляне Отказ',
		'WithdrawalRefusedConfirm' => 'Сигурен ли сте, че искате да въведете изтегляне отказ за обществото',
		'RefusedData' => 'Дата на отхвърляне',
		'RefusedReason' => 'Причина за отхвърляне',
		'RefusedInvoicing' => 'Фактуриране отхвърлянето',
		'NoInvoiceRefused' => 'Не зареждайте отхвърляне',
		'InvoiceRefused' => 'Заредете отхвърляне на клиента',
		'Status' => 'Статус',
		'StatusUnknown' => 'Неизвестен',
		'StatusWaiting' => 'Чакане',
		'StatusTrans' => 'Предавани',
		'StatusCredited' => 'Кредитира',
		'StatusRefused' => 'Отказ',
		'StatusMotif0' => 'Неуточнен',
		'StatusMotif1' => 'Предоставяне insuffisante',
		'StatusMotif2' => 'Тиражен conteste',
		'StatusMotif3' => 'Не Оттегляне за',
		'StatusMotif4' => 'Поръчка на клиента',
		'StatusMotif5' => 'RIB inexploitable',
		'StatusMotif6' => 'Сметка без баланс',
		'StatusMotif7' => 'Съдебно решение',
		'StatusMotif8' => 'Друга причина',
		'CreateAll' => 'Изтеглете всички',
		'CreateGuichet' => 'Само офис',
		'CreateBanque' => 'Само банка',
		'OrderWaiting' => 'Чакащи за лечение',
		'NotifyTransmision' => 'Оттегляне Предаване',
		'NotifyEmision' => 'Оттегляне емисии',
		'NotifyCredit' => 'Оттегляне кредит',
		'NumeroNationalEmetter' => 'Националната предавател номер',
		'PleaseSelectCustomerBankBANToWithdraw' => 'Изберете информация за банковата сметка на клиента, за да се оттегли',
		'WithBankUsingRIB' => 'За банкови сметки с помощта на RIB',
		'WithBankUsingBANBIC' => 'За банкови сметки с IBAN / BIC / SWIFT',
		'BankToReceiveWithdraw' => 'Банкова сметка за получаване оттегли',
		'CreditDate' => 'Кредит за',
		'WithdrawalFileNotCapable' => 'Не може да се генерира файл за изтегляне разписка за вашата страна',
		'ShowWithdraw' => 'Покажи Теглене',
		'IfInvoiceNeedOnWithdrawPaymentWontBeClosed' => 'Въпреки това, ако фактурата не е все още най-малко една оттегляне плащане обработват, не се определя като плаща, за да се даде възможност да управляват оттеглянето им преди.',
		'DoStandingOrdersBeforePayments' => 'Това разделите ви позволява да изисквате за постоянно нареждане. След като той ще бъде завършен, можете да въведете плащането, за да затворите фактура.',
		'InfoCreditSubject' => 'Плащане на постоянно нареждане %s от банката',
		'InfoCreditMessage' => 'Постоянната за %s е била платена от банката <br> Данни на плащане: %s',
		'InfoTransSubject' => 'Предаване на %s постоянно нареждане до банката',
		'InfoTransMessage' => 'Постоянната за %s е предавана до банката от %s %s. <br><br>',
		'InfoTransData' => 'Размер: %s <br> Metode: %s <br> Дата: %s',
		'InfoFoot' => 'Това е автоматично съобщение, изпратено от Dolibarr',
		'InfoRejectSubject' => 'Постоянния за отказа',
		'InfoRejectMessage' => 'Здравейте, <br><br> на standig реда на фактура %s, свързани на компанията %s, с размера на %s е било отказано от банката. <br><br> - <br> % $',
		'ModeWarning' => 'Възможност за реален режим не е създаден, спираме след тази симулация',
);
?>