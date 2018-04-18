<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface PaymentTransactionAddedMessageCollection extends MessageCollection {
    /**
     * @param $index
     * @return PaymentTransactionAddedMessage
     */
    public function at($index);

    /**
     * @return PaymentTransactionAddedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentTransactionAddedMessage
     */
    public function map($data, $index);
}
