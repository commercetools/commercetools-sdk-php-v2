<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ReferenceModel;

use Commercetools\Types\Common\Reference;

class CartDiscountReferenceModel extends ReferenceModel implements CartDiscountReference {
    const DISCRIMINATOR_VALUE = 'cart-discount';

    /**
     * @var CartDiscount
     */
    protected $obj;

    /**
     * @return CartDiscount
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            $value = $this->raw(CartDiscountReference::FIELD_OBJ);
            if (is_null($value)) {
                return $this->mapData(CartDiscount::class, null);
            }
            $value = $this->mapData(CartDiscount::class, $value);

            $this->obj = $value;
        }
        return $this->obj;
    }

    /**
     * @param CartDiscount $obj
     * @return $this
     */
    public function setObj(CartDiscount $obj)
    {
        $this->obj = $obj;

        return $this;
    }

}
