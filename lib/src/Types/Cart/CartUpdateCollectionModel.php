<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\UpdateCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartUpdateCollectionModel extends UpdateCollectionModel implements CartUpdateCollection {

    /**
     * @param CartUpdate $value
     * @return CartUpdateCollection
     */
    public function add($value) {
        if (!$value instanceof CartUpdate) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartUpdate
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartUpdate) {
            $data = $this->mapData(CartUpdate::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
