<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionModel;

use Commercetools\Types\DiscountCode\DiscountCodeReference;

class CartRemoveDiscountCodeActionModel extends CartUpdateActionModel implements CartRemoveDiscountCodeAction {
    const DISCRIMINATOR_VALUE = 'removeDiscountCode';

    /**
     * @var DiscountCodeReference
     */
    protected $discountCode;

    /**
     * @return DiscountCodeReference
     */
    public function getDiscountCode()
    {
        if (is_null($this->discountCode)) {
            $value = $this->raw(CartRemoveDiscountCodeAction::FIELD_DISCOUNT_CODE);
            if (is_null($value)) {
                return $this->mapData(DiscountCodeReference::class, null);
            }
            $value = $this->mapData(DiscountCodeReference::class, $value);

            $this->discountCode = $value;
        }
        return $this->discountCode;
    }

    /**
     * @param DiscountCodeReference $discountCode
     * @return $this
     */
    public function setDiscountCode(DiscountCodeReference $discountCode)
    {
        $this->discountCode = $discountCode;

        return $this;
    }

}
