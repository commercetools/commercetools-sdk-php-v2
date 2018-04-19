<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderRemoveParcelFromDeliveryActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderRemoveParcelFromDeliveryActionCollection
{

    /**
     * @param OrderRemoveParcelFromDeliveryAction $value
     * @return OrderRemoveParcelFromDeliveryActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderRemoveParcelFromDeliveryAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderRemoveParcelFromDeliveryAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderRemoveParcelFromDeliveryAction) {
            $data = $this->mapData(OrderRemoveParcelFromDeliveryAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
