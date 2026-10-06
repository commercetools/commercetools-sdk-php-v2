<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Image;
use Commercetools\Api\Models\Common\ImageBuilder;
use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Product\ProductReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<VariantImageAddedMessagePayload>
 */
final class VariantImageAddedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|ProductReference|ProductReferenceBuilder
     */
    private $product;

    /**

     * @var null|Image|ImageBuilder
     */
    private $image;

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
     * <p><a href="ctp:api:type:Image">Image</a> that was added.</p>
     *

     * @return null|Image
     */
    public function getImage()
    {
        return $this->image instanceof ImageBuilder ? $this->image->build() : $this->image;
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
     * @param ?Image $image
     * @return $this
     */
    public function withImage(?Image $image)
    {
        $this->image = $image;

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

    /**
     * @deprecated use withImage() instead
     * @return $this
     */
    public function withImageBuilder(?ImageBuilder $image)
    {
        $this->image = $image;

        return $this;
    }

    public function build(): VariantImageAddedMessagePayload
    {
        return new VariantImageAddedMessagePayloadModel(
            $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product,
            $this->image instanceof ImageBuilder ? $this->image->build() : $this->image,
            $this->staged
        );
    }

    public static function of(): VariantImageAddedMessagePayloadBuilder
    {
        return new self();
    }
}
