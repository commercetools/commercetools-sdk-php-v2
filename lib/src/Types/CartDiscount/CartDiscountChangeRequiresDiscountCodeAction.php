<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

interface CartDiscountChangeRequiresDiscountCodeAction extends CartDiscountUpdateAction {
    const FIELD_REQUIRES_DISCOUNT_CODE = 'requiresDiscountCode';

    /**
     * @return mixed
     */
    public function getRequiresDiscountCode();

    /**
     * @param mixed $requiresDiscountCode
     * @return $this
     */
    public function setRequiresDiscountCode($requiresDiscountCode);

}
