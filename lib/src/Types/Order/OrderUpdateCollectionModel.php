<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\UpdateCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderUpdateCollectionModel extends UpdateCollectionModel implements OrderUpdateCollection
{

    /**
     * @param OrderUpdate $value
     * @return OrderUpdateCollection
     */
    public function add($value) {
        if (!$value instanceof OrderUpdate) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderUpdate
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderUpdate) {
            $data = $this->mapData(OrderUpdate::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
