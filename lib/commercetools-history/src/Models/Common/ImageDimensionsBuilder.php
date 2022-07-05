<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

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

     * @var ?int
     */
    private $w;

    /**

     * @var ?int
     */
    private $h;

    /**

     * @return null|int
     */
    public function getW()
    {
        return $this->w;
    }

    /**

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
