<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\CartDiscount\CartDiscountUpdateActionModel;

class CartDiscountChangeRequiresDiscountCodeActionModel extends CartDiscountUpdateActionModel implements CartDiscountChangeRequiresDiscountCodeAction {
    const DISCRIMINATOR_VALUE = 'changeRequiresDiscountCode';

    /**
     * @var mixed
     */
    protected $requiresDiscountCode;

    /**
     * @return mixed
     */
    public function getRequiresDiscountCode()
    {
        if (is_null($this->requiresDiscountCode)) {
            $value = $this->raw(CartDiscountChangeRequiresDiscountCodeAction::FIELD_REQUIRES_DISCOUNT_CODE);
            $this->requiresDiscountCode = $value;
        }
        return $this->requiresDiscountCode;
    }

    /**
     * @param $requiresDiscountCode
     * @return $this
     */
    public function setRequiresDiscountCode($requiresDiscountCode)
    {
        $this->requiresDiscountCode = $requiresDiscountCode;

        return $this;
    }

}
