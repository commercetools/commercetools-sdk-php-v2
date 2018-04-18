<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderChangeShipmentStateActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderChangeShipmentStateActionCollection {

    /**
     * @param OrderChangeShipmentStateAction $value
     * @return OrderChangeShipmentStateActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderChangeShipmentStateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderChangeShipmentStateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderChangeShipmentStateAction) {
            $data = $this->mapData(OrderChangeShipmentStateAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
