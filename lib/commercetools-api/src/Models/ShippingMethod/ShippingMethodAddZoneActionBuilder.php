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

/**
 * @implements Builder<ShippingMethodAddZoneAction>
 */
final class ShippingMethodAddZoneActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ZoneResourceIdentifier|?ZoneResourceIdentifierBuilder
     */
    private $zone;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

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
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
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

    public function build(): ShippingMethodAddZoneAction
    {
        return new ShippingMethodAddZoneActionModel(
            $this->action,
            ($this->zone instanceof ZoneResourceIdentifierBuilder ? $this->zone->build() : $this->zone)
        );
    }

    public static function of(): ShippingMethodAddZoneActionBuilder
    {
        return new self();
    }
}
