<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ImageDimensions extends JsonObject
{
    public const FIELD_W = 'w';
    public const FIELD_H = 'h';

    /**
     * @return null|int
     */
    public function getW();

    /**
     * @return null|int
     */
    public function getH();

    /**
     * @param ?int $w
     */
    public function setW(?int $w): void;

    /**
     * @param ?int $h
     */
    public function setH(?int $h): void;
}
