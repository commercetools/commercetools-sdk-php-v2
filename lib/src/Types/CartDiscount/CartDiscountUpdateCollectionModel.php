<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\UpdateCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartDiscountUpdateCollectionModel extends UpdateCollectionModel implements CartDiscountUpdateCollection {

    /**
     * @param CartDiscountUpdate $value
     * @return CartDiscountUpdateCollection
     */
    public function add($value) {
        if (!$value instanceof CartDiscountUpdate) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDiscountUpdate
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDiscountUpdate) {
            $data = $this->mapData(CartDiscountUpdate::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
