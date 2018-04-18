<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderTransitionStateActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderTransitionStateActionCollection {

    /**
     * @param OrderTransitionStateAction $value
     * @return OrderTransitionStateActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderTransitionStateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderTransitionStateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderTransitionStateAction) {
            $data = $this->mapData(OrderTransitionStateAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
