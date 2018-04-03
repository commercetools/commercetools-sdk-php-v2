<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\ProductDiscount\ProductDiscountReference;

class DiscountedPriceModel extends JsonObjectModel implements DiscountedPrice {
    /**
     * @var Money
     */
    protected $value;
    /**
     * @var ProductDiscountReference
     */
    protected $discount;

    /**
     * @return Money
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            $value = $this->raw(DiscountedPrice::FIELD_VALUE);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->value = $value;
        }
        return $this->value;
    }
    /**
     * @return ProductDiscountReference
     */
    public function getDiscount()
    {
        if (is_null($this->discount)) {
            $value = $this->raw(DiscountedPrice::FIELD_DISCOUNT);
            if (is_null($value)) {
                return $this->mapData(ProductDiscountReference::class, null);
            }
            $value = $this->mapData(ProductDiscountReference::class, $value);

            $this->discount = $value;
        }
        return $this->discount;
    }

    /**
     * @param Money $value
     * @return $this
     */
    public function setValue(Money $value)
    {
        $this->value = $value;

        return $this;
    }
    /**
     * @param ProductDiscountReference $discount
     * @return $this
     */
    public function setDiscount(ProductDiscountReference $discount)
    {
        $this->discount = $discount;

        return $this;
    }

}
