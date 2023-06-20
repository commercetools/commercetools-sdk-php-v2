<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StandalonePriceRemovePriceTierAction>
 */
final class StandalonePriceRemovePriceTierActionBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $tierMinimumQuantity;

    /**
     * <p>The <code>minimumQuantity</code> of the <a href="ctp:api:type:PriceTier">PriceTier</a> to be removed from the <code>tiers</code> field of the <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.</p>
     *

     * @return null|int
     */
    public function getTierMinimumQuantity()
    {
        return $this->tierMinimumQuantity;
    }

    /**
     * @param ?int $tierMinimumQuantity
     * @return $this
     */
    public function withTierMinimumQuantity(?int $tierMinimumQuantity)
    {
        $this->tierMinimumQuantity = $tierMinimumQuantity;

        return $this;
    }


    public function build(): StandalonePriceRemovePriceTierAction
    {
        return new StandalonePriceRemovePriceTierActionModel(
            $this->tierMinimumQuantity
        );
    }

    public static function of(): StandalonePriceRemovePriceTierActionBuilder
    {
        return new self();
    }
}
