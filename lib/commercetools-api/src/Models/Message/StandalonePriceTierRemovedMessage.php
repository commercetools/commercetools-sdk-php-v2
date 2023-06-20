<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\PriceTier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StandalonePriceTierRemovedMessage extends Message
{
    public const FIELD_REMOVED_TIER = 'removedTier';

    /**
     * <p>The <a href="ctp:api:type:PriceTier">Price Tier</a> that has been removed from the array field <code>tiers</code> for the <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.</p>
     *

     * @return null|PriceTier
     */
    public function getRemovedTier();

    /**
     * @param ?PriceTier $removedTier
     */
    public function setRemovedTier(?PriceTier $removedTier): void;
}
