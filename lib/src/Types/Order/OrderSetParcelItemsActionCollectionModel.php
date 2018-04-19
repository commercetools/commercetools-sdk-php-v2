<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderSetParcelItemsActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderSetParcelItemsActionCollection
{

    /**
     * @param OrderSetParcelItemsAction $value
     * @return OrderSetParcelItemsActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderSetParcelItemsAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderSetParcelItemsAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderSetParcelItemsAction) {
            $data = $this->mapData(OrderSetParcelItemsAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
