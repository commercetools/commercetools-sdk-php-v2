<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\PriceTierCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StandalonePriceTiersSetMessagePayload>
 */
final class StandalonePriceTiersSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?PriceTierCollection
     */
    private $tiers;

    /**

     * @var ?PriceTierCollection
     */
    private $previousTiers;

    /**
     * <p>The updated content of the field <code>tiers</code> of the affected <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.</p>
     *

     * @return null|PriceTierCollection
     */
    public function getTiers()
    {
        return $this->tiers;
    }

    /**
     * <p>The previous content of the field <code>tiers</code> of the affected <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.</p>
     *

     * @return null|PriceTierCollection
     */
    public function getPreviousTiers()
    {
        return $this->previousTiers;
    }

    /**
     * @param ?PriceTierCollection $tiers
     * @return $this
     */
    public function withTiers(?PriceTierCollection $tiers)
    {
        $this->tiers = $tiers;

        return $this;
    }

    /**
     * @param ?PriceTierCollection $previousTiers
     * @return $this
     */
    public function withPreviousTiers(?PriceTierCollection $previousTiers)
    {
        $this->previousTiers = $previousTiers;

        return $this;
    }


    public function build(): StandalonePriceTiersSetMessagePayload
    {
        return new StandalonePriceTiersSetMessagePayloadModel(
            $this->tiers,
            $this->previousTiers
        );
    }

    public static function of(): StandalonePriceTiersSetMessagePayloadBuilder
    {
        return new self();
    }
}
