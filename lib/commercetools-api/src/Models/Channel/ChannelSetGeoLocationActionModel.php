<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Api\Models\Common\GeoJson;
use Commercetools\Api\Models\Common\GeoJsonModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Base\MapperFactory;
use stdClass;

final class ChannelSetGeoLocationActionModel extends JsonObjectModel implements ChannelSetGeoLocationAction
{
    public const DISCRIMINATOR_VALUE = 'setGeoLocation';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?GeoJson
     */
    protected $geoLocation;


    public function __construct(
        GeoJson $geoLocation = null
    ) {
        $this->geoLocation = $geoLocation;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ChannelUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|GeoJson
     */
    public function getGeoLocation()
    {
        if (is_null($this->geoLocation)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ChannelSetGeoLocationAction::FIELD_GEO_LOCATION);
            if (is_null($data)) {
                return null;
            }

            $this->geoLocation = GeoJsonModel::of($data);
        }

        return $this->geoLocation;
    }

    public function setGeoLocation(?GeoJson $geoLocation): void
    {
        $this->geoLocation = $geoLocation;
    }
}
