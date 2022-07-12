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
use Commercetools\Ml\Models\Common\ProductReference;
use Commercetools\Ml\Models\Common\ProductReferenceBuilder;
use stdClass;

/**
 * @implements Builder<MissingImages>
 */
final class MissingImagesBuilder implements Builder
{
    /**

     * @var null|ProductReference|ProductReferenceBuilder
     */
    private $product;

    /**

     * @var ?int
     */
    private $variantId;

    /**

     * @var ?int
     */
    private $imageCount;

    /**

     * @return null|ProductReference
     */
    public function getProduct()
    {
        return $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product;
    }

    /**
     * <p>ID of the variant</p>
     *

     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * <p>Number of images the variant contains.</p>
     *

     * @return null|int
     */
    public function getImageCount()
    {
        return $this->imageCount;
    }

    /**
     * @param ?ProductReference $product
     * @return $this
     */
    public function withProduct(?ProductReference $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @param ?int $variantId
     * @return $this
     */
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * @param ?int $imageCount
     * @return $this
     */
    public function withImageCount(?int $imageCount)
    {
        $this->imageCount = $imageCount;

        return $this;
    }

    /**
     * @deprecated use withProduct() instead
     * @return $this
     */
    public function withProductBuilder(?ProductReferenceBuilder $product)
    {
        $this->product = $product;

        return $this;
    }

    public function build(): MissingImages
    {
        return new MissingImagesModel(
            $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product,
            $this->variantId,
            $this->imageCount
        );
    }

    public static function of(): MissingImagesBuilder
    {
        return new self();
    }
}
