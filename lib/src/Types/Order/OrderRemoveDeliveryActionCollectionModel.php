<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderRemoveDeliveryActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderRemoveDeliveryActionCollection {

    /**
     * @param OrderRemoveDeliveryAction $value
     * @return OrderRemoveDeliveryActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderRemoveDeliveryAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderRemoveDeliveryAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderRemoveDeliveryAction) {
            $data = $this->mapData(OrderRemoveDeliveryAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
