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
 * @implements Builder<ShippingMethodRemoveZoneAction>
 */
final class ShippingMethodRemoveZoneActionBuilder implements Builder
{
    /**
     * @var null|ZoneResourceIdentifier|ZoneResourceIdentifierBuilder
     */
    private $zone;

    /**
     * @return null|ZoneResourceIdentifier
     */
    public function getZone()
    {
        return $this->zone instanceof ZoneResourceIdentifierBuilder ? $this->zone->build() : $this->zone;
    }

    /**
     * @return $this
     */
    public function withZone(?ZoneResourceIdentifier $zone)
    {
        $this->zone = $zone;

        return $this;
    }

    /**
     * @return $this
     */
    public function withZoneBuilder(?ZoneResourceIdentifierBuilder $zone)
    {
        $this->zone = $zone;

        return $this;
    }

    public function build(): ShippingMethodRemoveZoneAction
    {
        return new ShippingMethodRemoveZoneActionModel(
            $this->zone instanceof ZoneResourceIdentifierBuilder ? $this->zone->build() : $this->zone
        );
    }

    public static function of(): ShippingMethodRemoveZoneActionBuilder
    {
        return new self();
    }
}
