<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\Common\Reference;
use Commercetools\Types\Common\ReferenceCollection;

interface DiscountCodeChangeCartDiscountsAction extends DiscountCodeUpdateAction {
    const FIELD_CART_DISCOUNTS = 'cartDiscounts';

    /**
     * @return ReferenceCollection
     */
    public function getCartDiscounts();

    /**
     * @param ReferenceCollection $cartDiscounts
     * @return $this
     */
    public function setCartDiscounts(ReferenceCollection $cartDiscounts);

}
