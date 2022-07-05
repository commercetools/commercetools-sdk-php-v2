<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Api\Models\Common\DiscountedPriceDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StandalonePriceSetDiscountedPriceAction extends StandalonePriceUpdateAction
{
    public const FIELD_DISCOUNTED = 'discounted';

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *

     * @return null|DiscountedPriceDraft
     */
    public function getDiscounted();

    /**
     * @param ?DiscountedPriceDraft $discounted
     */
    public function setDiscounted(?DiscountedPriceDraft $discounted): void;
}
