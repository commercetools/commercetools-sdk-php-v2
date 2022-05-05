<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GeoJsonPoint extends GeoJson
{
    public const FIELD_COORDINATES = 'coordinates';

    /**
     * <p>Longitude (stored on index <code>[0]</code>) and latitude (stored on index <code>[1]</code>) of the <a href="https://datatracker.ietf.org/doc/html/rfc7946#section-3.1.2">Point</a>.</p>
     *
     * @return null|array
     */
    public function getCoordinates();

    /**
     * @param ?array $coordinates
     */
    public function setCoordinates(?array $coordinates): void;
}
