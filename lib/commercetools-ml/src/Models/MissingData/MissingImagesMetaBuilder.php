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
 * @implements Builder<MissingImagesMeta>
 */
final class MissingImagesMetaBuilder implements Builder
{
    /**
     * @var null|MissingImagesProductLevel|MissingImagesProductLevelBuilder
     */
    private $productLevel;

    /**
     * @var null|MissingImagesVariantLevel|MissingImagesVariantLevelBuilder
     */
    private $variantLevel;

    /**
     * @var ?int
     */
    private $threshold;

    /**
     * @return null|MissingImagesProductLevel
     */
    public function getProductLevel()
    {
        return $this->productLevel instanceof MissingImagesProductLevelBuilder ? $this->productLevel->build() : $this->productLevel;
    }

    /**
     * @return null|MissingImagesVariantLevel
     */
    public function getVariantLevel()
    {
        return $this->variantLevel instanceof MissingImagesVariantLevelBuilder ? $this->variantLevel->build() : $this->variantLevel;
    }

    /**
     * <p>The minimum number of images a product variant must have. Anything below this value is considered a product variant with missing images.</p>
     *
     * @return null|int
     */
    public function getThreshold()
    {
        return $this->threshold;
    }

    /**
     * @param ?MissingImagesProductLevel $productLevel
     * @return $this
     */
    public function withProductLevel(?MissingImagesProductLevel $productLevel)
    {
        $this->productLevel = $productLevel;

        return $this;
    }

    /**
     * @param ?MissingImagesVariantLevel $variantLevel
     * @return $this
     */
    public function withVariantLevel(?MissingImagesVariantLevel $variantLevel)
    {
        $this->variantLevel = $variantLevel;

        return $this;
    }

    /**
     * @param ?int $threshold
     * @return $this
     */
    public function withThreshold(?int $threshold)
    {
        $this->threshold = $threshold;

        return $this;
    }

    /**
     * @deprecated use withProductLevel() instead
     * @return $this
     */
    public function withProductLevelBuilder(?MissingImagesProductLevelBuilder $productLevel)
    {
        $this->productLevel = $productLevel;

        return $this;
    }

    /**
     * @deprecated use withVariantLevel() instead
     * @return $this
     */
    public function withVariantLevelBuilder(?MissingImagesVariantLevelBuilder $variantLevel)
    {
        $this->variantLevel = $variantLevel;

        return $this;
    }

    public function build(): MissingImagesMeta
    {
        return new MissingImagesMetaModel(
            $this->productLevel instanceof MissingImagesProductLevelBuilder ? $this->productLevel->build() : $this->productLevel,
            $this->variantLevel instanceof MissingImagesVariantLevelBuilder ? $this->variantLevel->build() : $this->variantLevel,
            $this->threshold
        );
    }

    public static function of(): MissingImagesMetaBuilder
    {
        return new self();
    }
}
