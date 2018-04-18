<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderSetDeliveryAddressActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderSetDeliveryAddressActionCollection {

    /**
     * @param OrderSetDeliveryAddressAction $value
     * @return OrderSetDeliveryAddressActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderSetDeliveryAddressAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderSetDeliveryAddressAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderSetDeliveryAddressAction) {
            $data = $this->mapData(OrderSetDeliveryAddressAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
