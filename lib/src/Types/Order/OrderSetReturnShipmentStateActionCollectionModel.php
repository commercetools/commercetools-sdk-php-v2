<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderSetReturnShipmentStateActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderSetReturnShipmentStateActionCollection {

    /**
     * @param OrderSetReturnShipmentStateAction $value
     * @return OrderSetReturnShipmentStateActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderSetReturnShipmentStateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderSetReturnShipmentStateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderSetReturnShipmentStateAction) {
            $data = $this->mapData(OrderSetReturnShipmentStateAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
