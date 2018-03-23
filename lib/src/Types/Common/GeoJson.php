<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonObject;

use Commercetools\Types;

interface GeoJson extends JsonObject {
    const DISCRIMINATOR = 'type';
    const SUB_TYPES = [
        'Point' => Types\Common\GeoJsonPoint::class,

    ];

    const FIELD_TYPE = 'type';
    const FIELD_COORDINATES = 'coordinates';

    /**
     * @return string
     */
    public function getType();

    /**
     * @return array
     */
    public function getCoordinates();

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type);

    /**
     * @param array $coordinates
     * @return $this
     */
    public function setCoordinates($coordinates);

}
