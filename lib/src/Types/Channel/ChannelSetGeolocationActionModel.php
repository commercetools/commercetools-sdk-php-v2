<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Channel\ChannelUpdateActionModel;

use Commercetools\Types\Common\GeoJson;
use Commercetools\Types\Common\GeoJsonPoint;

class ChannelSetGeolocationActionModel extends ChannelUpdateActionModel implements ChannelSetGeolocationAction {
    const DISCRIMINATOR_VALUE = 'setGeoLocation';

    /**
     * @var mixed
     */
    protected $geoLocation;

    /**
     * @return mixed
     */
    public function getGeoLocation()
    {
        if (is_null($this->geoLocation)) {
            $value = $this->raw(ChannelSetGeolocationAction::FIELD_GEO_LOCATION);
            $this->geoLocation = $value;
        }
        return $this->geoLocation;
    }

    /**
     * @param $geoLocation
     * @return $this
     */
    public function setGeoLocation($geoLocation)
    {
        $this->geoLocation = $geoLocation;

        return $this;
    }

    /**
     * @return GeoJson
     */
    public function getGeoLocationAsGeoJson()
    {
        if (is_null($this->geoLocation)) {
            $value = $this->raw(ChannelSetGeolocationAction::FIELD_GEO_LOCATION);
            $resolvedClass = $this->resolveDiscriminator(GeoJson::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->geoLocation = $value;
        }
        return $this->geoLocation;
    }

    /**
     * @return GeoJsonPoint
     */
    public function getGeoLocationAsGeoJsonPoint()
    {
        if (is_null($this->geoLocation)) {
            $value = $this->raw(ChannelSetGeolocationAction::FIELD_GEO_LOCATION);
            if (is_null($value)) {
                return $this->mapData(GeoJsonPoint::class, null);
            }
            $value = $this->mapData(GeoJsonPoint::class, $value);

            $this->geoLocation = $value;
        }
        return $this->geoLocation;
    }

}
