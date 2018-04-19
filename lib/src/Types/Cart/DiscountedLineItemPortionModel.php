<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\CartDiscount\CartDiscountReference;
use Commercetools\Types\Common\Money;

class DiscountedLineItemPortionModel extends JsonObjectModel implements DiscountedLineItemPortion
{
    /**
     * @var CartDiscountReference
     */
    protected $discount;
    /**
     * @var Money
     */
    protected $discountedAmount;

    /**
     * @return CartDiscountReference
     */
    public function getDiscount()
    {
        if (is_null($this->discount)) {
            $value = $this->raw(DiscountedLineItemPortion::FIELD_DISCOUNT);
            if (is_null($value)) {
                return $this->mapData(CartDiscountReference::class, null);
            }
            $value = $this->mapData(CartDiscountReference::class, $value);

            $this->discount = $value;
        }
        return $this->discount;
    }
    /**
     * @return Money
     */
    public function getDiscountedAmount()
    {
        if (is_null($this->discountedAmount)) {
            $value = $this->raw(DiscountedLineItemPortion::FIELD_DISCOUNTED_AMOUNT);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->discountedAmount = $value;
        }
        return $this->discountedAmount;
    }

    /**
     * @param CartDiscountReference $discount
     * @return $this
     */
    public function setDiscount(CartDiscountReference $discount)
    {
        $this->discount = $discount;

        return $this;
    }
    /**
     * @param Money $discountedAmount
     * @return $this
     */
    public function setDiscountedAmount(Money $discountedAmount)
    {
        $this->discountedAmount = $discountedAmount;

        return $this;
    }

}
