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

/**
 * @internal
 */
final class ChannelSetGeoLocationActionModel extends JsonObjectModel implements ChannelSetGeoLocationAction
{
    public const DISCRIMINATOR_VALUE = 'setGeoLocation';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?GeoJson
     */
    protected $geoLocation;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?GeoJson $geoLocation = null,
        ?string $action = null
    ) {
        $this->geoLocation = $geoLocation;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Value to set.</p>
     *
     *
     * @return null|GeoJson
     */
    public function getGeoLocation()
    {
        if (is_null($this->geoLocation)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_GEO_LOCATION);
            if (is_null($data)) {
                return null;
            }
            $className = GeoJsonModel::resolveDiscriminatorClass($data);
            $this->geoLocation = $className::of($data);
        }

        return $this->geoLocation;
    }


    /**
     * @param ?GeoJson $geoLocation
     */
    public function setGeoLocation(?GeoJson $geoLocation): void
    {
        $this->geoLocation = $geoLocation;
    }
}
