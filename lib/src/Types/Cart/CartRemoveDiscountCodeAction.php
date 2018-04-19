<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\DiscountCode\DiscountCodeReference;

interface CartRemoveDiscountCodeAction extends CartUpdateAction
{
    const FIELD_DISCOUNT_CODE = 'discountCode';

    /**
     * @return DiscountCodeReference
     */
    public function getDiscountCode();

    /**
     * @param DiscountCodeReference $discountCode
     * @return $this
     */
    public function setDiscountCode(DiscountCodeReference $discountCode);

}
