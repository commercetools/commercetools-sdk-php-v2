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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ChannelSetGeoLocationAction>
 */
final class ChannelSetGeoLocationActionBuilder implements Builder
{
    /**
     * @var null|GeoJson|GeoJsonBuilder
     */
    private $geoLocation;

    /**
     * @return null|GeoJson
     */
    public function getGeoLocation()
    {
        return $this->geoLocation instanceof GeoJsonBuilder ? $this->geoLocation->build() : $this->geoLocation;
    }

    /**
     * @param ?GeoJson $geoLocation
     * @return $this
     */
    public function withGeoLocation(?GeoJson $geoLocation)
    {
        $this->geoLocation = $geoLocation;

        return $this;
    }

    /**
     * @deprecated use withGeoLocation() instead
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
            $this->geoLocation instanceof GeoJsonBuilder ? $this->geoLocation->build() : $this->geoLocation
        );
    }

    public static function of(): ChannelSetGeoLocationActionBuilder
    {
        return new self();
    }
}
