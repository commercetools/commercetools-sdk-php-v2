<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Api\Models\Common\PriceTierDraftCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StandalonePriceSetPriceTiersAction>
 */
final class StandalonePriceSetPriceTiersActionBuilder implements Builder
{
    /**

     * @var ?PriceTierDraftCollection
     */
    private $tiers;

    /**
     * <p>Value to set. If empty, any existing value will be removed.
     * The <code>minimumQuantity</code> of the PriceTiers must be unique and greater than <code>1</code>, otherwise an <a href="ctp:api:type:InvalidFieldError">InvalidField</a> error is returned.</p>
     *

     * @return null|PriceTierDraftCollection
     */
    public function getTiers()
    {
        return $this->tiers;
    }

    /**
     * @param ?PriceTierDraftCollection $tiers
     * @return $this
     */
    public function withTiers(?PriceTierDraftCollection $tiers)
    {
        $this->tiers = $tiers;

        return $this;
    }


    public function build(): StandalonePriceSetPriceTiersAction
    {
        return new StandalonePriceSetPriceTiersActionModel(
            $this->tiers
        );
    }

    public static function of(): StandalonePriceSetPriceTiersActionBuilder
    {
        return new self();
    }
}
