<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\CartDiscount\CartDiscountUpdateActionModel;

class CartDiscountChangeTargetActionModel extends CartDiscountUpdateActionModel implements CartDiscountChangeTargetAction {
    const DISCRIMINATOR_VALUE = 'changeTarget';

    /**
     * @var CartDiscountTarget
     */
    protected $target;

    /**
     * @return CartDiscountTarget
     */
    public function getTarget()
    {
        if (is_null($this->target)) {
            $value = $this->raw(CartDiscountChangeTargetAction::FIELD_TARGET);
            $resolvedClass = $this->resolveDiscriminator(CartDiscountTarget::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->target = $value;
        }
        return $this->target;
    }

    /**
     * @param CartDiscountTarget $target
     * @return $this
     */
    public function setTarget(CartDiscountTarget $target)
    {
        $this->target = $target;

        return $this;
    }

}
