<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderImportCustomLineItemStateActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderImportCustomLineItemStateActionCollection {

    /**
     * @param OrderImportCustomLineItemStateAction $value
     * @return OrderImportCustomLineItemStateActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderImportCustomLineItemStateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderImportCustomLineItemStateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderImportCustomLineItemStateAction) {
            $data = $this->mapData(OrderImportCustomLineItemStateAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
