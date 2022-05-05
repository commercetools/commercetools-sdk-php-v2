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
     * @var ?int
     */
    private $w;

    /**
     * @var ?int
     */
    private $h;

    /**
     * <p>Width of the Asset source.</p>
     *
     * @return null|int
     */
    public function getW()
    {
        return $this->w;
    }

    /**
     * <p>Height of the Asset source.</p>
     *
     * @return null|int
     */
    public function getH()
    {
        return $this->h;
    }

    /**
     * @param ?int $w
     * @return $this
     */
    public function withW(?int $w)
    {
        $this->w = $w;

        return $this;
    }

    /**
     * @param ?int $h
     * @return $this
     */
    public function withH(?int $h)
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
