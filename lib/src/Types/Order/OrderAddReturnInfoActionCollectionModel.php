<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Order\OrderUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderAddReturnInfoActionCollectionModel extends OrderUpdateActionCollectionModel implements OrderAddReturnInfoActionCollection
{

    /**
     * @param OrderAddReturnInfoAction $value
     * @return OrderAddReturnInfoActionCollection
     */
    public function add($value) {
        if (!$value instanceof OrderAddReturnInfoAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderAddReturnInfoAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderAddReturnInfoAction) {
            $data = $this->mapData(OrderAddReturnInfoAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
