<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderSetShippingAddressActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderSetShippingAddressActionCollection
{

    /**
     * @param OrderSetShippingAddressAction $value
     * @return OrderSetShippingAddressActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderSetShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderSetShippingAddressAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderSetShippingAddressAction) {
            $data = $this->mapData(OrderSetShippingAddressAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
