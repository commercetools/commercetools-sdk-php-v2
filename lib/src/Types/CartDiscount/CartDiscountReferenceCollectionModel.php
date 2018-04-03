<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class CartDiscountReferenceCollectionModel extends JsonCollection implements CartDiscountReferenceCollection {

    /**
     * @param CartDiscountReference $value
     * @return CartDiscountReferenceCollection
     */
    public function add($value) {
        if (!$value instanceof CartDiscountReference) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDiscountReference
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDiscountReference) {
            $data = $this->mapData(CartDiscountReference::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
