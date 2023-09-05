<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Cart\DiscountedLineItemPortionCollection;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DiscountedLineItemPriceDraft extends JsonObject
{
    public const FIELD_VALUE = 'value';
    public const FIELD_INCLUDED_DISCOUNTS = 'includedDiscounts';

    /**
     * <p>Discounted money value.</p>
     *

     * @return null|Money
     */
    public function getValue();

    /**
     * <p>Discounts to be applied.</p>
     *

     * @return null|DiscountedLineItemPortionCollection
     */
    public function getIncludedDiscounts();

    /**
     * @param ?Money $value
     */
    public function setValue(?Money $value): void;

    /**
     * @param ?DiscountedLineItemPortionCollection $includedDiscounts
     */
    public function setIncludedDiscounts(?DiscountedLineItemPortionCollection $includedDiscounts): void;
}
