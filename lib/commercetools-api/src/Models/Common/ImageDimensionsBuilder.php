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
 * @implements Builder<ImageDimensions>
 */
final class ImageDimensionsBuilder implements Builder
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


    public function build(): ImageDimensions
    {
        return new ImageDimensionsModel(
            $this->w,
            $this->h
        );
    }

    public static function of(): ImageDimensionsBuilder
    {
        return new self();
    }
}
