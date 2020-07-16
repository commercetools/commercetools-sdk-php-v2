<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MissingImagesProductLevel>
 */
final class MissingImagesProductLevelBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $missingImages;

    /**
     * @var ?int
     */
    private $total;

    /**
     * <p>Number of products missing images.</p>
     *
     * @return null|int
     */
    public function getMissingImages()
    {
        return $this->missingImages;
    }

    /**
     * <p>Number of products scanned.</p>
     *
     * @return null|int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param ?int $missingImages
     * @return $this
     */
    public function withMissingImages(?int $missingImages)
    {
        $this->missingImages = $missingImages;

        return $this;
    }

    /**
     * @param ?int $total
     * @return $this
     */
    public function withTotal(?int $total)
    {
        $this->total = $total;

        return $this;
    }


    public function build(): MissingImagesProductLevel
    {
        return new MissingImagesProductLevelModel(
            $this->missingImages,
            $this->total
        );
    }

    public static function of(): MissingImagesProductLevelBuilder
    {
        return new self();
    }
}
