<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface OrderPaymentChangedMessageCollection extends MessageCollection {
    /**
     * @param $index
     * @return OrderPaymentChangedMessage
     */
    public function at($index);

    /**
     * @return OrderPaymentChangedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderPaymentChangedMessage
     */
    public function map($data, $index);
}
