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
 * @implements Builder<ShippingMethodRemoveShippingRateChange>
 */
final class ShippingMethodRemoveShippingRateChangeBuilder implements Builder
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
    private $previousValue;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Zone from which the ShippingRate was removed.</p>
     *

     * @return null|ZoneResourceIdentifier
     */
    public function getZone()
    {
        return $this->zone instanceof ZoneResourceIdentifierBuilder ? $this->zone->build() : $this->zone;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|ShippingRate
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ShippingRateBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?ShippingRate $previousValue
     * @return $this
     */
    public function withPreviousValue(?ShippingRate $previousValue)
    {
        $this->previousValue = $previousValue;

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
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?ShippingRateBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): ShippingMethodRemoveShippingRateChange
    {
        return new ShippingMethodRemoveShippingRateChangeModel(
            $this->change,
            $this->zone instanceof ZoneResourceIdentifierBuilder ? $this->zone->build() : $this->zone,
            $this->previousValue instanceof ShippingRateBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): ShippingMethodRemoveShippingRateChangeBuilder
    {
        return new self();
    }
}
