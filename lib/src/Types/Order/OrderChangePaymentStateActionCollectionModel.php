<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderChangePaymentStateActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderChangePaymentStateActionCollection
{

    /**
     * @param OrderChangePaymentStateAction $value
     * @return OrderChangePaymentStateActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderChangePaymentStateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderChangePaymentStateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderChangePaymentStateAction) {
            $data = $this->mapData(OrderChangePaymentStateAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
