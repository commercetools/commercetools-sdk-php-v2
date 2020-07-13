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
 * @implements Builder<AssetDimensions>
 */
final class AssetDimensionsBuilder implements Builder
{
    /**
     * @var ?float
     */
    private $w;

    /**
     * @var ?float
     */
    private $h;

    /**
     * @return null|float
     */
    public function getW()
    {
        return $this->w;
    }

    /**
     * @return null|float
     */
    public function getH()
    {
        return $this->h;
    }

    /**
     * @param ?float $w
     * @return $this
     */
    public function withW(?float $w)
    {
        $this->w = $w;

        return $this;
    }

    /**
     * @param ?float $h
     * @return $this
     */
    public function withH(?float $h)
    {
        $this->h = $h;

        return $this;
    }


    public function build(): AssetDimensions
    {
        return new AssetDimensionsModel(
            $this->w,
            $this->h
        );
    }

    public static function of(): AssetDimensionsBuilder
    {
        return new self();
    }
}
