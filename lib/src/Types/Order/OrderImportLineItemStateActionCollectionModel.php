<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderImportLineItemStateActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderImportLineItemStateActionCollection
{

    /**
     * @param OrderImportLineItemStateAction $value
     * @return OrderImportLineItemStateActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderImportLineItemStateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderImportLineItemStateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderImportLineItemStateAction) {
            $data = $this->mapData(OrderImportLineItemStateAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
