<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Zone\ZoneResourceIdentifier;
use Commercetools\Api\Models\Zone\ZoneResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ZoneRateDraft>
 */
final class ZoneRateDraftBuilder implements Builder
{
    /**
     * @var null|ZoneResourceIdentifier|ZoneResourceIdentifierBuilder
     */
    private $zone;

    /**
     * @var ?ShippingRateDraftCollection
     */
    private $shippingRates;

    /**
     * <p>Sets the <a href="ctp:api:type:Zone">Zone</a> for which the shippng rates are valid.</p>
     *
     * @return null|ZoneResourceIdentifier
     */
    public function getZone()
    {
        return $this->zone instanceof ZoneResourceIdentifierBuilder ? $this->zone->build() : $this->zone;
    }

    /**
     * <p>Shipping rates for the <code>currencies</code> configured in the <a href="ctp:api:type:Project">Project</a>. The array must not contain two ShippingRates with the same <a href="ctp:api:type:CurrencyCode">CurrencyCode</a>.</p>
     *
     * @return null|ShippingRateDraftCollection
     */
    public function getShippingRates()
    {
        return $this->shippingRates;
    }

    /**
     * @param ?ZoneResourceIdentifier $zone
     * @return $this
     */
    public function withZone(?ZoneResourceIdentifier $zone)
    {
        $this->zone = $zone;

        return $this;
    }

    /**
     * @param ?ShippingRateDraftCollection $shippingRates
     * @return $this
     */
    public function withShippingRates(?ShippingRateDraftCollection $shippingRates)
    {
        $this->shippingRates = $shippingRates;

        return $this;
    }

    /**
     * @deprecated use withZone() instead
     * @return $this
     */
    public function withZoneBuilder(?ZoneResourceIdentifierBuilder $zone)
    {
        $this->zone = $zone;

        return $this;
    }

    public function build(): ZoneRateDraft
    {
        return new ZoneRateDraftModel(
            $this->zone instanceof ZoneResourceIdentifierBuilder ? $this->zone->build() : $this->zone,
            $this->shippingRates
        );
    }

    public static function of(): ZoneRateDraftBuilder
    {
        return new self();
    }
}
