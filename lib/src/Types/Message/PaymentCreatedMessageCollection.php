<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface PaymentCreatedMessageCollection extends MessageCollection
{
    /**
     * @param $index
     * @return PaymentCreatedMessage
     */
    public function at($index);

    /**
     * @return PaymentCreatedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentCreatedMessage
     */
    public function map($data, $index);
}
