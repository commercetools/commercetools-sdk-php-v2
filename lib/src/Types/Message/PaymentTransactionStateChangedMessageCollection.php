<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface PaymentTransactionStateChangedMessageCollection extends MessageCollection
{
    /**
     * @param $index
     * @return PaymentTransactionStateChangedMessage
     */
    public function at($index);

    /**
     * @return PaymentTransactionStateChangedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentTransactionStateChangedMessage
     */
    public function map($data, $index);
}
