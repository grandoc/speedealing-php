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
		'InvoiceAvoir' => 'Nota de crédito',
		'InvoiceAvoirAsk' => 'Nota de crédito para corregir la factura',
		'InvoiceAvoirDesc' => 'La <b>nota de crédito</b> es una factura negativa destinada a compensar un importe de factura que difiere del importe realmente pagado (por haber pagado de más o por devolución de productos, por ejemplo).',
		'InvoiceHasAvoir' => 'Corregida por una o más notas de crédito',
		'ConfirmConvertToReduc' => '¿Quiere convertir esta nota de crédito en una reducción futura?<br>El importe de esta nota de crédito se almacenará para este cliente. Podrá utilizarse para reducir el importe de una próxima factura del cliente.',
		'AddBill' => 'Crear factura o nota de crédito',
		'EnterPaymentDueToCustomer' => 'Realizar pago de notas de crédito al cliente',
		'ErrorInvoiceAvoirMustBeNegative' => 'Error, una factura de tipo nota de crédito debe tener un importe negativo',
		'ConfirmClassifyPaidPartiallyReasonAvoir' => 'El resto a pagar <b>(%s %s)</b> se ha regularizado (ya que artículo se ha devuelto, olvidado entregar, descuento no definido...)  mediante una nota de crédito',
		'ConfirmClassifyPaidPartiallyReasonOtherDesc' => 'Esta elección será posible, por ejemplo, en los casos siguiente:<br>-pago parcial ya que una partida de productos se ha devuleto.<br>- reclamado por no entregar productos de la factura <br>En todos los casos, la reclamación debe regularizarse mediante una nota de crédito',
		'ShowInvoiceAvoir' => 'Ver nota de crédito',
		'AlreadyPaidNoCreditNotesNoDeposits' => 'Ya pagado (excluidos las notas de crédito y anticipos)',
		'ShowDiscount' => 'Ver la nota de crédito',
		'CreditNote' => 'Nota de crédito',
		'CreditNotes' => 'Notas de crédito',
		'DiscountFromCreditNote' => 'Descuento resultante de la nota de crédito %s',
		'AbsoluteDiscountUse' => 'Este tipo de crédito no puede ser utilizado en una factura antes de su validación',
		'CreditNoteDepositUse' => 'La factura debe de estar validada para poder utilizar este tipo de créditos',
		'CreditNoteConvertedIntoDiscount' => 'Esta nota de crédito se convirtió en %s',
		'TerreNumRefModelDesc1' => 'Devuelve el número bajo el formato %syymm-nnnn para las facturas y %syymm-nnnn para las notas de crédito donde yy es el año, mm. el mes y nnnn un contador secuencial sin ruptura y sin permanencia a 0',
		'AddCreditNote' => 'Crear nota de crédito',
);
?>