<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class CartDiscountValueCollectionModel extends JsonCollection implements CartDiscountValueCollection {

    /**
     * @param CartDiscountValue $value
     * @return CartDiscountValueCollection
     */
    public function add($value) {
        if (!$value instanceof CartDiscountValue) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDiscountValue
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDiscountValue) {
            $resolvedClass = $this->resolveDiscriminator(CartDiscountValue::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
