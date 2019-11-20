<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\Builder;

/**
 * @implements Builder<GeoJson>
 */
final class GeoJsonBuilder implements Builder
{
    public function build(): GeoJson
    {
        return new GeoJsonModel(
        );
    }

    public static function of(): GeoJsonBuilder
    {
        return new self();
    }
}
