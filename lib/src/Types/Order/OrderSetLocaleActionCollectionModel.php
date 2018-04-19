<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderSetLocaleActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderSetLocaleActionCollection
{

    /**
     * @param OrderSetLocaleAction $value
     * @return OrderSetLocaleActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderSetLocaleAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderSetLocaleAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderSetLocaleAction) {
            $data = $this->mapData(OrderSetLocaleAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
