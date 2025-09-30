<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DiscountsConfiguration extends JsonObject
{
    public const FIELD_DISCOUNT_COMBINATION_MODE = 'discountCombinationMode';

    /**
     * <p>Indicates how Product Discounts and Cart Discounts should be combined. Default value is <code>Stacking</code>.</p>
     *

     * @return null|string
     */
    public function getDiscountCombinationMode();

    /**
     * @param ?string $discountCombinationMode
     */
    public function setDiscountCombinationMode(?string $discountCombinationMode): void;
}
