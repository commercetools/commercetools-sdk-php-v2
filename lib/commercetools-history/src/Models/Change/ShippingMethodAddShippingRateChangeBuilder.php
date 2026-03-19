<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\ShippingRate;
use Commercetools\History\Models\Common\ShippingRateBuilder;
use Commercetools\History\Models\Common\ZoneResourceIdentifier;
use Commercetools\History\Models\Common\ZoneResourceIdentifierBuilder;

/**
 * @implements Builder<ShippingMethodAddShippingRateChange>
 */
final class ShippingMethodAddShippingRateChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|ZoneResourceIdentifier|ZoneResourceIdentifierBuilder
     */
    private $zone;

    /**

     * @var null|ShippingRate|ShippingRateBuilder
     */
    private $nextValue;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Zone to which the ShippingRate was added.</p>
     *

     * @return null|ZoneResourceIdentifier
     */
    public function getZone()
    {
        return $this->zone instanceof ZoneResourceIdentifierBuilder ? $this->zone->build() : $this->zone;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ShippingRate
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ShippingRateBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
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
     * @param ?ShippingRate $nextValue
     * @return $this
     */
    public function withNextValue(?ShippingRate $nextValue)
    {
        $this->nextValue = $nextValue;

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
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?ShippingRateBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): ShippingMethodAddShippingRateChange
    {
        return new ShippingMethodAddShippingRateChangeModel(
            $this->change,
            $this->zone instanceof ZoneResourceIdentifierBuilder ? $this->zone->build() : $this->zone,
            $this->nextValue instanceof ShippingRateBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): ShippingMethodAddShippingRateChangeBuilder
    {
        return new self();
    }
}
