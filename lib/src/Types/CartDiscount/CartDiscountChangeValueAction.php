<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

interface CartDiscountChangeValueAction extends CartDiscountUpdateAction
{
    const FIELD_VALUE = 'value';

    /**
     * @return CartDiscountValue
     */
    public function getValue();

    /**
     * @param CartDiscountValue $value
     * @return $this
     */
    public function setValue(CartDiscountValue $value);

}
