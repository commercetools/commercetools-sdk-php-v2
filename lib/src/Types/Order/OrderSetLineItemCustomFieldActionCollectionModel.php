<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderSetLineItemCustomFieldActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderSetLineItemCustomFieldActionCollection {

    /**
     * @param OrderSetLineItemCustomFieldAction $value
     * @return OrderSetLineItemCustomFieldActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderSetLineItemCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderSetLineItemCustomFieldAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderSetLineItemCustomFieldAction) {
            $data = $this->mapData(OrderSetLineItemCustomFieldAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
