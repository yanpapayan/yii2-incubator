<?php
/**
 * @author Ian Kuznetsov <yankuznecov@ya.ru>
 * Date: 28.12.2016
 * Time: 22:46
 */

namespace yanpapayan\incubator\events;

use yii\base\Event;

/**
 * Class DepositEvent
 * @package yanpapayan\incubator\events
 * @author Ian Kuznetsov <yankuznecov@ya.ru>
 */
class DepositEvent extends Event
{
    const EVENT_INVOICE_PAYMENT = 'eventInvoicePayment';

    /** @var array */
    public $invoiceData;
}