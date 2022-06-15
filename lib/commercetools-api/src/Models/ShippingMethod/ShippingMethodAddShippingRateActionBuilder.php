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
 * @implements Builder<ShippingMethodAddShippingRateAction>
 */
final class ShippingMethodAddShippingRateActionBuilder implements Builder
{
    /**
     * @var null|ZoneResourceIdentifier|ZoneResourceIdentifierBuilder
     */
    private $zone;

    /**
     * @var null|ShippingRateDraft|ShippingRateDraftBuilder
     */
    private $shippingRate;

    /**
     * <p><a href="ctp:api:type:Zone">Zone</a> to which the ShippingRate should be added.</p>
     *
     * @return null|ZoneResourceIdentifier
     */
    public function getZone()
    {
        return $this->zone instanceof ZoneResourceIdentifierBuilder ? $this->zone->build() : $this->zone;
    }

    /**
     * <p>Value to add to <code>shippingRates</code>.</p>
     *
     * @return null|ShippingRateDraft
     */
    public function getShippingRate()
    {
        return $this->shippingRate instanceof ShippingRateDraftBuilder ? $this->shippingRate->build() : $this->shippingRate;
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
     * @param ?ShippingRateDraft $shippingRate
     * @return $this
     */
    public function withShippingRate(?ShippingRateDraft $shippingRate)
    {
        $this->shippingRate = $shippingRate;

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

    /**
     * @deprecated use withShippingRate() instead
     * @return $this
     */
    public function withShippingRateBuilder(?ShippingRateDraftBuilder $shippingRate)
    {
        $this->shippingRate = $shippingRate;

        return $this;
    }

    public function build(): ShippingMethodAddShippingRateAction
    {
        return new ShippingMethodAddShippingRateActionModel(
            $this->zone instanceof ZoneResourceIdentifierBuilder ? $this->zone->build() : $this->zone,
            $this->shippingRate instanceof ShippingRateDraftBuilder ? $this->shippingRate->build() : $this->shippingRate
        );
    }

    public static function of(): ShippingMethodAddShippingRateActionBuilder
    {
        return new self();
    }
}
