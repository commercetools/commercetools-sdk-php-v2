<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Channel\ChannelUpdateActionModel;

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
        return null;
    }

    /**
     * @return GeoJsonPoint
     */
    public function getGeoLocationAsGeoJsonPoint()
    {
        return null;
    }

}
