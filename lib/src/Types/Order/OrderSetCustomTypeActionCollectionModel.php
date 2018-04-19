<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderSetCustomTypeActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderSetCustomTypeActionCollection
{

    /**
     * @param OrderSetCustomTypeAction $value
     * @return OrderSetCustomTypeActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderSetCustomTypeAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderSetCustomTypeAction) {
            $data = $this->mapData(OrderSetCustomTypeAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
