<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderSetCustomFieldActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderSetCustomFieldActionCollection
{

    /**
     * @param OrderSetCustomFieldAction $value
     * @return OrderSetCustomFieldActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderSetCustomFieldAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderSetCustomFieldAction) {
            $data = $this->mapData(OrderSetCustomFieldAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
