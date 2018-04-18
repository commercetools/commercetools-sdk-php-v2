<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderSetReturnPaymentStateActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderSetReturnPaymentStateActionCollection {

    /**
     * @param OrderSetReturnPaymentStateAction $value
     * @return OrderSetReturnPaymentStateActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderSetReturnPaymentStateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderSetReturnPaymentStateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderSetReturnPaymentStateAction) {
            $data = $this->mapData(OrderSetReturnPaymentStateAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
