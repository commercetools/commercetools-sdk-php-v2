<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface OrderShipmentStateChangedMessageCollection extends MessageCollection {
    /**
     * @param $index
     * @return OrderShipmentStateChangedMessage
     */
    public function at($index);

    /**
     * @return OrderShipmentStateChangedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderShipmentStateChangedMessage
     */
    public function map($data, $index);
}
