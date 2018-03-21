<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonObject;

use Commercetools\Types\CartDiscount\CartDiscountReference;
use Commercetools\Types\Common\Money;

interface DiscountedLineItemPortion extends JsonObject {
    const FIELD_DISCOUNT = 'discount';
    const FIELD_DISCOUNTED_AMOUNT = 'discountedAmount';

    /**
     * @return CartDiscountReference
     */
    public function getDiscount();

    /**
     * @return Money
     */
    public function getDiscountedAmount();

    /**
     * @param CartDiscountReference $discount
     * @return $this
     */
    public function setDiscount(CartDiscountReference $discount);

    /**
     * @param Money $discountedAmount
     * @return $this
     */
    public function setDiscountedAmount(Money $discountedAmount);

}
