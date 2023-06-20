<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StandalonePriceRemovePriceTierAction extends StandalonePriceUpdateAction
{
    public const FIELD_TIER_MINIMUM_QUANTITY = 'tierMinimumQuantity';

    /**
     * <p>The <code>minimumQuantity</code> of the <a href="ctp:api:type:PriceTier">PriceTier</a> to be removed from the <code>tiers</code> field of the <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.</p>
     *

     * @return null|int
     */
    public function getTierMinimumQuantity();

    /**
     * @param ?int $tierMinimumQuantity
     */
    public function setTierMinimumQuantity(?int $tierMinimumQuantity): void;
}
