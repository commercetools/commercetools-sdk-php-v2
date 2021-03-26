<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface GeoLocation extends JsonObject
{

    public const FIELD_TYPE = 'type';
    public const FIELD_COORDINATES = 'coordinates';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * @return null|array
     */
    public function getCoordinates();

    /**
     * @param ?string $type
     */
    public function setType(?string $type): void;

    /**
     * @param ?array $coordinates
     */
    public function setCoordinates(?array $coordinates): void;
}
