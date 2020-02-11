<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface AssetDimensions extends JsonObject
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

    public function setW(?int $w): void;

    public function setH(?int $h): void;
}
