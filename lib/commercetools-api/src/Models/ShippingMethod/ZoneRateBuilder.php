<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Zone\ZoneReference;
use Commercetools\Api\Models\Zone\ZoneReferenceBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ZoneRate>
 */
final class ZoneRateBuilder implements Builder
{
    /**
     * @var null|ZoneReference|ZoneReferenceBuilder
     */
    private $zone;

    /**
     * @var ?ShippingRateCollection
     */
    private $shippingRates;

    /**
     * @return null|ZoneReference
     */
    public function getZone()
    {
        return $this->zone instanceof ZoneReferenceBuilder ? $this->zone->build() : $this->zone;
    }

    /**
     * <p>The array does not contain two shipping rates with the same currency.</p>
     *
     * @return null|ShippingRateCollection
     */
    public function getShippingRates()
    {
        return $this->shippingRates;
    }

    /**
     * @return $this
     */
    public function withZone(?ZoneReference $zone)
    {
        $this->zone = $zone;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingRates(?ShippingRateCollection $shippingRates)
    {
        $this->shippingRates = $shippingRates;

        return $this;
    }

    /**
     * @return $this
     */
    public function withZoneBuilder(?ZoneReferenceBuilder $zone)
    {
        $this->zone = $zone;

        return $this;
    }

    public function build(): ZoneRate
    {
        return new ZoneRateModel(
            $this->zone instanceof ZoneReferenceBuilder ? $this->zone->build() : $this->zone,
            $this->shippingRates
        );
    }

    public static function of(): ZoneRateBuilder
    {
        return new self();
    }
}
