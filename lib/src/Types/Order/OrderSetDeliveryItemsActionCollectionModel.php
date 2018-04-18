<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderSetDeliveryItemsActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderSetDeliveryItemsActionCollection {

    /**
     * @param OrderSetDeliveryItemsAction $value
     * @return OrderSetDeliveryItemsActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderSetDeliveryItemsAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderSetDeliveryItemsAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderSetDeliveryItemsAction) {
            $data = $this->mapData(OrderSetDeliveryItemsAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
