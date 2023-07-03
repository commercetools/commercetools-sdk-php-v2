<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Api\Models\Common\PriceTierDraft;
use Commercetools\Api\Models\Common\PriceTierDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StandalonePriceAddPriceTierAction>
 */
final class StandalonePriceAddPriceTierActionBuilder implements Builder
{
    /**

     * @var null|PriceTierDraft|PriceTierDraftBuilder
     */
    private $tier;

    /**
     * <p>The <a href="ctp:api:type:PriceTier">PriceTier</a> to be added to the <code>tiers</code> field of the <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.
     * The action returns an <a href="ctp:api:type:InvalidFieldError">InvalidField</a> error in the following cases:</p>
     * <ul>
     * <li>Trying to add a PriceTier with <code>minimumQuantity</code> &lt; <code>2</code>.</li>
     * <li>Trying to add a PriceTier with <code>minimumQuantity</code> that already exists for the StandalonePrice.</li>
     * </ul>
     *

     * @return null|PriceTierDraft
     */
    public function getTier()
    {
        return $this->tier instanceof PriceTierDraftBuilder ? $this->tier->build() : $this->tier;
    }

    /**
     * @param ?PriceTierDraft $tier
     * @return $this
     */
    public function withTier(?PriceTierDraft $tier)
    {
        $this->tier = $tier;

        return $this;
    }

    /**
     * @deprecated use withTier() instead
     * @return $this
     */
    public function withTierBuilder(?PriceTierDraftBuilder $tier)
    {
        $this->tier = $tier;

        return $this;
    }

    public function build(): StandalonePriceAddPriceTierAction
    {
        return new StandalonePriceAddPriceTierActionModel(
            $this->tier instanceof PriceTierDraftBuilder ? $this->tier->build() : $this->tier
        );
    }

    public static function of(): StandalonePriceAddPriceTierActionBuilder
    {
        return new self();
    }
}
