<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Api\Models\Common\GeoJson;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ChannelSetGeoLocationAction extends ChannelUpdateAction
{
    public const FIELD_GEO_LOCATION = 'geoLocation';

    /**
     * <p>Value to set.</p>
     *

     * @return null|GeoJson
     */
    public function getGeoLocation();

    /**
     * @param ?GeoJson $geoLocation
     */
    public function setGeoLocation(?GeoJson $geoLocation): void;
}
