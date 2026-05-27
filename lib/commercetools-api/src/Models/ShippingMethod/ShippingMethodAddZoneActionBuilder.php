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
 * @implements Builder<ShippingMethodAddZoneAction>
 */
final class ShippingMethodAddZoneActionBuilder implements Builder
{
    /**

     * @var null|ZoneResourceIdentifier|ZoneResourceIdentifierBuilder
     */
    private $zone;

    /**
     * <p>Value to add to <code>zoneRates</code>.</p>
     * <p>Adds a new <a href="ctp:api:type:ZoneRate">ZoneRate</a> entry to the <code>zoneRates</code> array with the specified <a href="ctp:api:type:Zone">Zone</a> and an empty <code>shippingRates</code> array. After adding the Zone, you can add <a href="ctp:api:type:ShippingRate">ShippingRates</a> for this Zone using the <a href="ctp:api:type:ShippingMethodAddShippingRateAction">Add ShippingRate</a> update action.</p>
     *

     * @return null|ZoneResourceIdentifier
     */
    public function getZone()
    {
        return $this->zone instanceof ZoneResourceIdentifierBuilder ? $this->zone->build() : $this->zone;
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
     * @deprecated use withZone() instead
     * @return $this
     */
    public function withZoneBuilder(?ZoneResourceIdentifierBuilder $zone)
    {
        $this->zone = $zone;

        return $this;
    }

    public function build(): ShippingMethodAddZoneAction
    {
        return new ShippingMethodAddZoneActionModel(
            $this->zone instanceof ZoneResourceIdentifierBuilder ? $this->zone->build() : $this->zone
        );
    }

    public static function of(): ShippingMethodAddZoneActionBuilder
    {
        return new self();
    }
}
