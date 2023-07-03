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
 * @implements Builder<StandalonePriceTierAddedMessagePayload>
 */
final class StandalonePriceTierAddedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|PriceTier|PriceTierBuilder
     */
    private $tier;

    /**
     * <p>The <a href="ctp:api:type:PriceTier">Price Tier</a> that has been added to the array field <code>tiers</code> for the <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.</p>
     *

     * @return null|PriceTier
     */
    public function getTier()
    {
        return $this->tier instanceof PriceTierBuilder ? $this->tier->build() : $this->tier;
    }

    /**
     * @param ?PriceTier $tier
     * @return $this
     */
    public function withTier(?PriceTier $tier)
    {
        $this->tier = $tier;

        return $this;
    }

    /**
     * @deprecated use withTier() instead
     * @return $this
     */
    public function withTierBuilder(?PriceTierBuilder $tier)
    {
        $this->tier = $tier;

        return $this;
    }

    public function build(): StandalonePriceTierAddedMessagePayload
    {
        return new StandalonePriceTierAddedMessagePayloadModel(
            $this->tier instanceof PriceTierBuilder ? $this->tier->build() : $this->tier
        );
    }

    public static function of(): StandalonePriceTierAddedMessagePayloadBuilder
    {
        return new self();
    }
}
