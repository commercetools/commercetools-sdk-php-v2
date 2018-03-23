<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\DiscountCode\DiscountCodeUpdateActionModel;

use Commercetools\Types\Common\Reference;
use Commercetools\Types\Common\ReferenceCollection;

class DiscountCodeChangeCartDiscountsActionModel extends DiscountCodeUpdateActionModel implements DiscountCodeChangeCartDiscountsAction {
    const DISCRIMINATOR_VALUE = 'changeCartDiscounts';

    /**
     * @var ReferenceCollection
     */
    protected $cartDiscounts;

    /**
     * @return ReferenceCollection
     */
    public function getCartDiscounts()
    {
        if (is_null($this->cartDiscounts)) {
            $value = $this->raw(DiscountCodeChangeCartDiscountsAction::FIELD_CART_DISCOUNTS);
            if (is_null($value)) {
                return $this->mapData(ReferenceCollection::class, null);
            }
            $value = $this->mapData(ReferenceCollection::class, $value);
            $this->cartDiscounts = $value;
        }
        return $this->cartDiscounts;
    }

    /**
     * @param ReferenceCollection $cartDiscounts
     * @return $this
     */
    public function setCartDiscounts(ReferenceCollection $cartDiscounts)
    {
        $this->cartDiscounts = $cartDiscounts;

        return $this;
    }

}
