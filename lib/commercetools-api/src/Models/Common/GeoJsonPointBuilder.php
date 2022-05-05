<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GeoJsonPoint>
 */
final class GeoJsonPointBuilder implements Builder
{
    /**
     * @var ?array
     */
    private $coordinates;

    /**
     * <p>Longitude (stored on index <code>[0]</code>) and latitude (stored on index <code>[1]</code>) of the <a href="https://datatracker.ietf.org/doc/html/rfc7946#section-3.1.2">Point</a>.</p>
     *
     * @return null|array
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }

    /**
     * @param ?array $coordinates
     * @return $this
     */
    public function withCoordinates(?array $coordinates)
    {
        $this->coordinates = $coordinates;

        return $this;
    }


    public function build(): GeoJsonPoint
    {
        return new GeoJsonPointModel(
            $this->coordinates
        );
    }

    public static function of(): GeoJsonPointBuilder
    {
        return new self();
    }
}
