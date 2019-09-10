<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Cart\DiscountedLineItemPortionCollection;
use Commercetools\Api\Models\Common\Money;

interface DiscountedLineItemPriceDraft extends JsonObject
{
    
    const FIELD_VALUE = 'value';
    const FIELD_INCLUDED_DISCOUNTS = 'includedDiscounts';

    /**
     *
     * @return Money|null
     */
    public function getValue();
    
    /**
     *
     * @return DiscountedLineItemPortionCollection|null
     */
    public function getIncludedDiscounts();
    public function setValue(?Money $value): void;
    
    public function setIncludedDiscounts(?DiscountedLineItemPortionCollection $includedDiscounts): void;
}