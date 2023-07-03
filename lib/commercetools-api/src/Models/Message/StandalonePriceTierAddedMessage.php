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

interface StandalonePriceTierAddedMessage extends Message
{
    public const FIELD_TIER = 'tier';

    /**
     * <p>The <a href="ctp:api:type:PriceTier">Price Tier</a> that has been added to the array field <code>tiers</code> for the <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.</p>
     *

     * @return null|PriceTier
     */
    public function getTier();

    /**
     * @param ?PriceTier $tier
     */
    public function setTier(?PriceTier $tier): void;
}
