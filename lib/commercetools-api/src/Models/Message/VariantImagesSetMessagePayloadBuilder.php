<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Product\ProductReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<VariantImagesSetMessagePayload>
 */
final class VariantImagesSetMessagePayloadBuilder implements Builder
{
    /**

     * @var null|ProductReference|ProductReferenceBuilder
     */
    private $product;

    /**

     * @var ?ImageCollection
     */
    private $images;

    /**

     * @var ?ImageCollection
     */
    private $oldImages;

    /**

     * @var ?bool
     */
    private $staged;

    /**
     * <p>Reference to the Product containing the Variant.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct()
    {
        return $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product;
    }

    /**
     * <p>The images that were set on the Variant.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * <p>The previous images of the Variant.</p>
     *

     * @return null|ImageCollection
     */
    public function getOldImages()
    {
        return $this->oldImages;
    }

    /**
     * <p>Whether the update was only applied to the staged Variant.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
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
     * @param ?ImageCollection $images
     * @return $this
     */
    public function withImages(?ImageCollection $images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * @param ?ImageCollection $oldImages
     * @return $this
     */
    public function withOldImages(?ImageCollection $oldImages)
    {
        $this->oldImages = $oldImages;

        return $this;
    }

    /**
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

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

    public function build(): VariantImagesSetMessagePayload
    {
        return new VariantImagesSetMessagePayloadModel(
            $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product,
            $this->images,
            $this->oldImages,
            $this->staged
        );
    }

    public static function of(): VariantImagesSetMessagePayloadBuilder
    {
        return new self();
    }
}
