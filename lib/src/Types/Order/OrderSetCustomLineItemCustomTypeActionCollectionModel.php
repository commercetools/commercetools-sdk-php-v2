<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderSetCustomLineItemCustomTypeActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderSetCustomLineItemCustomTypeActionCollection
{

    /**
     * @param OrderSetCustomLineItemCustomTypeAction $value
     * @return OrderSetCustomLineItemCustomTypeActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderSetCustomLineItemCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderSetCustomLineItemCustomTypeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderSetCustomLineItemCustomTypeAction) {
            $data = $this->mapData(OrderSetCustomLineItemCustomTypeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
