<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface OrderReturnShipmentStateChangedMessageCollection extends MessageCollection {
    /**
     * @param $index
     * @return OrderReturnShipmentStateChangedMessage
     */
    public function at($index);

    /**
     * @return OrderReturnShipmentStateChangedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderReturnShipmentStateChangedMessage
     */
    public function map($data, $index);
}
