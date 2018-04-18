<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderAddParcelToDeliveryActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderAddParcelToDeliveryActionCollection {

    /**
     * @param OrderAddParcelToDeliveryAction $value
     * @return OrderAddParcelToDeliveryActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderAddParcelToDeliveryAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderAddParcelToDeliveryAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderAddParcelToDeliveryAction) {
            $data = $this->mapData(OrderAddParcelToDeliveryAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
