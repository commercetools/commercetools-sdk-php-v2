<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderTransitionCustomLineItemStateActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderTransitionCustomLineItemStateActionCollection
{

    /**
     * @param OrderTransitionCustomLineItemStateAction $value
     * @return OrderTransitionCustomLineItemStateActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderTransitionCustomLineItemStateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderTransitionCustomLineItemStateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderTransitionCustomLineItemStateAction) {
            $data = $this->mapData(OrderTransitionCustomLineItemStateAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
