<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderChangeOrderStateActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderChangeOrderStateActionCollection {

    /**
     * @param OrderChangeOrderStateAction $value
     * @return OrderChangeOrderStateActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderChangeOrderStateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderChangeOrderStateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderChangeOrderStateAction) {
            $data = $this->mapData(OrderChangeOrderStateAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
