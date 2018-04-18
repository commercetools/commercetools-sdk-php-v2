<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\Common\ReferenceCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderReferenceCollectionModel extends ReferenceCollectionModel implements OrderReferenceCollection {

    /**
     * @param OrderReference $value
     * @return OrderReferenceCollection
     */
    public function add($value) {
        if (!$value instanceof OrderReference) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderReference
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderReference) {
            $data = $this->mapData(OrderReference::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
