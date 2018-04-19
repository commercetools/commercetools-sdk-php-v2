<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderSetLineItemCustomTypeActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderSetLineItemCustomTypeActionCollection
{

    /**
     * @param OrderSetLineItemCustomTypeAction $value
     * @return OrderSetLineItemCustomTypeActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderSetLineItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderSetLineItemCustomTypeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderSetLineItemCustomTypeAction) {
            $data = $this->mapData(OrderSetLineItemCustomTypeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
