<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class CartDiscountTargetCollectionModel extends JsonCollection implements CartDiscountTargetCollection {

    /**
     * @param CartDiscountTarget $value
     * @return CartDiscountTargetCollection
     */
    public function add($value) {
        if (!$value instanceof CartDiscountTarget) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDiscountTarget
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDiscountTarget) {
            $resolvedClass = $this->resolveDiscriminator(CartDiscountTarget::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
