<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderSetCustomLineItemCustomFieldActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderSetCustomLineItemCustomFieldActionCollection
{

    /**
     * @param OrderSetCustomLineItemCustomFieldAction $value
     * @return OrderSetCustomLineItemCustomFieldActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderSetCustomLineItemCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderSetCustomLineItemCustomFieldAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderSetCustomLineItemCustomFieldAction) {
            $data = $this->mapData(OrderSetCustomLineItemCustomFieldAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
