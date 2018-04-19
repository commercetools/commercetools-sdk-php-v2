<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderSetBillingAddressActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderSetBillingAddressActionCollection
{

    /**
     * @param OrderSetBillingAddressAction $value
     * @return OrderSetBillingAddressActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderSetBillingAddressAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderSetBillingAddressAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderSetBillingAddressAction) {
            $data = $this->mapData(OrderSetBillingAddressAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
