<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Api\Models\Common\GeoJson;
use Commercetools\Api\Models\Common\GeoJsonBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ChannelSetGeoLocationAction>
 */
final class ChannelSetGeoLocationActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var GeoJson|?GeoJsonBuilder
     */
    private $geoLocation;

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
     * @return null|GeoJson
     */
    public function getGeoLocation()
    {
        return $this->geoLocation instanceof GeoJsonBuilder ? $this->geoLocation->build() : $this->geoLocation;
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
    public function withGeoLocation(?GeoJson $geoLocation)
    {
        $this->geoLocation = $geoLocation;

        return $this;
    }

    /**
     * @return $this
     */
    public function withGeoLocationBuilder(?GeoJsonBuilder $geoLocation)
    {
        $this->geoLocation = $geoLocation;

        return $this;
    }

    public function build(): ChannelSetGeoLocationAction
    {
        return new ChannelSetGeoLocationActionModel(
            $this->action,
            ($this->geoLocation instanceof GeoJsonBuilder ? $this->geoLocation->build() : $this->geoLocation)
        );
    }

    public static function of(): ChannelSetGeoLocationActionBuilder
    {
        return new self();
    }
}
