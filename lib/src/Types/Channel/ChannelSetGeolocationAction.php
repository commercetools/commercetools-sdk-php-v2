<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Common\GeoJson;
use Commercetools\Types\Common\GeoJsonPoint;

interface ChannelSetGeolocationAction extends ChannelUpdateAction
{
    const FIELD_GEO_LOCATION = 'geoLocation';

    /**
     * @return mixed
     */
    public function getGeoLocation();

    /**
     * @param mixed $geoLocation
     * @return $this
     */
    public function setGeoLocation($geoLocation);

    /**
     * @return GeoJson
     */
    public function getGeoLocationAsGeoJson();

    /**
     * @return GeoJsonPoint
     */
    public function getGeoLocationAsGeoJsonPoint();

}
