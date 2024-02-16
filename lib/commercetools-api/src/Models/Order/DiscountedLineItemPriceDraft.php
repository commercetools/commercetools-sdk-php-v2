<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Cart\DiscountedLineItemPortionDraftCollection;
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

     * @return null|DiscountedLineItemPortionDraftCollection
     */
    public function getIncludedDiscounts();

    /**
     * @param ?Money $value
     */
    public function setValue(?Money $value): void;

    /**
     * @param ?DiscountedLineItemPortionDraftCollection $includedDiscounts
     */
    public function setIncludedDiscounts(?DiscountedLineItemPortionDraftCollection $includedDiscounts): void;
}
