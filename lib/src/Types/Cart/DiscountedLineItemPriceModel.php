<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\TypedMoney;

class DiscountedLineItemPriceModel extends JsonObjectModel implements DiscountedLineItemPrice {
    /**
     * @var TypedMoney
     */
    protected $value;
    /**
     * @var DiscountedLineItemPortionCollection
     */
    protected $includedDiscounts;

    /**
     * @return TypedMoney
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            $value = $this->raw(DiscountedLineItemPrice::FIELD_VALUE);
            $resolvedClass = $this->resolveDiscriminator(TypedMoney::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->value = $value;
        }
        return $this->value;
    }
    /**
     * @return DiscountedLineItemPortionCollection
     */
    public function getIncludedDiscounts()
    {
        if (is_null($this->includedDiscounts)) {
            $value = $this->raw(DiscountedLineItemPrice::FIELD_INCLUDED_DISCOUNTS);
            if (is_null($value)) {
                return $this->mapData(DiscountedLineItemPortionCollection::class, null);
            }
            $value = $this->mapData(DiscountedLineItemPortionCollection::class, $value);
            $this->includedDiscounts = $value;
        }
        return $this->includedDiscounts;
    }

    /**
     * @param TypedMoney $value
     * @return $this
     */
    public function setValue(TypedMoney $value)
    {
        $this->value = $value;

        return $this;
    }
    /**
     * @param DiscountedLineItemPortionCollection $includedDiscounts
     * @return $this
     */
    public function setIncludedDiscounts(DiscountedLineItemPortionCollection $includedDiscounts)
    {
        $this->includedDiscounts = $includedDiscounts;

        return $this;
    }

}
