<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\TypedMoney;

interface DiscountedLineItemPrice extends JsonObject {
    const FIELD_VALUE = 'value';
    const FIELD_INCLUDED_DISCOUNTS = 'includedDiscounts';

    /**
     * @return TypedMoney
     */
    public function getValue();

    /**
     * @return DiscountedLineItemPortionCollection
     */
    public function getIncludedDiscounts();

    /**
     * @param TypedMoney $value
     * @return $this
     */
    public function setValue(TypedMoney $value);

    /**
     * @param DiscountedLineItemPortionCollection $includedDiscounts
     * @return $this
     */
    public function setIncludedDiscounts(DiscountedLineItemPortionCollection $includedDiscounts);

}
