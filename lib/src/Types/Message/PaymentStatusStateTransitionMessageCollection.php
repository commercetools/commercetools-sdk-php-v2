<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface PaymentStatusStateTransitionMessageCollection extends MessageCollection {
    /**
     * @param $index
     * @return PaymentStatusStateTransitionMessage
     */
    public function at($index);

    /**
     * @return PaymentStatusStateTransitionMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentStatusStateTransitionMessage
     */
    public function map($data, $index);
}
