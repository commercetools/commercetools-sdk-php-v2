<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\TypedMoney;

interface DiscountedLineItemPrice extends JsonObject
{
    
    const FIELD_VALUE = 'value';
    const FIELD_INCLUDED_DISCOUNTS = 'includedDiscounts';

    /**
     *
     * @return TypedMoney|null
     */
    public function getValue();
    
    /**
     *
     * @return DiscountedLineItemPortionCollection|null
     */
    public function getIncludedDiscounts();
    public function setValue(?TypedMoney $value): void;
    
    public function setIncludedDiscounts(?DiscountedLineItemPortionCollection $includedDiscounts): void;
}