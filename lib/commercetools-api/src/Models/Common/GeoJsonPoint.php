<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

interface GeoJsonPoint extends GeoJson
{
    const FIELD_COORDINATES = 'coordinates';

    /**
     * @return null|array
     */
    public function getCoordinates();

    public function setCoordinates(?array $coordinates): void;
}
