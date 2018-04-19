<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface PaymentInteractionAddedMessageCollection extends MessageCollection
{
    /**
     * @param $index
     * @return PaymentInteractionAddedMessage
     */
    public function at($index);

    /**
     * @return PaymentInteractionAddedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return PaymentInteractionAddedMessage
     */
    public function map($data, $index);
}
