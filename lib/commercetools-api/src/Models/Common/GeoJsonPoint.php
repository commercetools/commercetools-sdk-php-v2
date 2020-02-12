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
     * @return null|array
     */
    public function getCoordinates();

    public function setCoordinates(?array $coordinates): void;
}
