<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\Builder;

/**
 * @implements Builder<GeoJsonPoint>
 */
final class GeoJsonPointBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?array
     */
    private $coordinates;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return null|array
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
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
            $this->type,
            $this->coordinates
        );
    }

    public static function of(): GeoJsonPointBuilder
    {
        return new self();
    }
}
