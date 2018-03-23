<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

interface CartDiscountChangeTargetAction extends CartDiscountUpdateAction {
    const FIELD_TARGET = 'target';

    /**
     * @return CartDiscountTarget
     */
    public function getTarget();

    /**
     * @param CartDiscountTarget $target
     * @return $this
     */
    public function setTarget(CartDiscountTarget $target);

}
