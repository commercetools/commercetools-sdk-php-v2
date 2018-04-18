<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderSetOrderNumberActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderSetOrderNumberActionCollection {

    /**
     * @param OrderSetOrderNumberAction $value
     * @return OrderSetOrderNumberActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderSetOrderNumberAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderSetOrderNumberAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderSetOrderNumberAction) {
            $data = $this->mapData(OrderSetOrderNumberAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
