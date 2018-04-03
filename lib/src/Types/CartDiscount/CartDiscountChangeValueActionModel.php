<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\CartDiscount\CartDiscountUpdateActionModel;

class CartDiscountChangeValueActionModel extends CartDiscountUpdateActionModel implements CartDiscountChangeValueAction {
    const DISCRIMINATOR_VALUE = 'changeValue';

    /**
     * @var CartDiscountValue
     */
    protected $value;

    /**
     * @return CartDiscountValue
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            $value = $this->raw(CartDiscountChangeValueAction::FIELD_VALUE);
            $resolvedClass = $this->resolveDiscriminator(CartDiscountValue::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->value = $value;
        }
        return $this->value;
    }

    /**
     * @param CartDiscountValue $value
     * @return $this
     */
    public function setValue(CartDiscountValue $value)
    {
        $this->value = $value;

        return $this;
    }

}
