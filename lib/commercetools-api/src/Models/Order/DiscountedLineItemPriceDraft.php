<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Cart\DiscountedLineItemPortionCollection;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Base\JsonObject;

interface DiscountedLineItemPriceDraft extends JsonObject
{
    const FIELD_VALUE = 'value';
    const FIELD_INCLUDED_DISCOUNTS = 'includedDiscounts';

    /**
     * @return null|Money
     */
    public function getValue();

    /**
     * @return null|DiscountedLineItemPortionCollection
     */
    public function getIncludedDiscounts();

    public function setValue(?Money $value): void;

    public function setIncludedDiscounts(?DiscountedLineItemPortionCollection $includedDiscounts): void;
}
