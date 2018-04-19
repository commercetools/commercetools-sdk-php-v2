<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderAddDeliveryActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderAddDeliveryActionCollection
{

    /**
     * @param OrderAddDeliveryAction $value
     * @return OrderAddDeliveryActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderAddDeliveryAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderAddDeliveryAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderAddDeliveryAction) {
            $data = $this->mapData(OrderAddDeliveryAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
