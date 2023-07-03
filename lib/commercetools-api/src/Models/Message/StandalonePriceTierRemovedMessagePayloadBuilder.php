<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\PriceTier;
use Commercetools\Api\Models\Common\PriceTierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StandalonePriceTierRemovedMessagePayload>
 */
final class StandalonePriceTierRemovedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|PriceTier|PriceTierBuilder
     */
    private $removedTier;

    /**
     * <p>The <a href="ctp:api:type:PriceTier">Price Tier</a> that has been removed from the array field <code>tiers</code> for the <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.</p>
     *

     * @return null|PriceTier
     */
    public function getRemovedTier()
    {
        return $this->removedTier instanceof PriceTierBuilder ? $this->removedTier->build() : $this->removedTier;
    }

    /**
     * @param ?PriceTier $removedTier
     * @return $this
     */
    public function withRemovedTier(?PriceTier $removedTier)
    {
        $this->removedTier = $removedTier;

        return $this;
    }

    /**
     * @deprecated use withRemovedTier() instead
     * @return $this
     */
    public function withRemovedTierBuilder(?PriceTierBuilder $removedTier)
    {
        $this->removedTier = $removedTier;

        return $this;
    }

    public function build(): StandalonePriceTierRemovedMessagePayload
    {
        return new StandalonePriceTierRemovedMessagePayloadModel(
            $this->removedTier instanceof PriceTierBuilder ? $this->removedTier->build() : $this->removedTier
        );
    }

    public static function of(): StandalonePriceTierRemovedMessagePayloadBuilder
    {
        return new self();
    }
}
