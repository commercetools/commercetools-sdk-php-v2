<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderTransitionLineItemStateActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderTransitionLineItemStateActionCollection
{

    /**
     * @param OrderTransitionLineItemStateAction $value
     * @return OrderTransitionLineItemStateActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderTransitionLineItemStateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderTransitionLineItemStateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderTransitionLineItemStateAction) {
            $data = $this->mapData(OrderTransitionLineItemStateAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
