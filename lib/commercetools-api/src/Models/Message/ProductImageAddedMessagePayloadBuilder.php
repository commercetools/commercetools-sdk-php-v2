<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Image;
use Commercetools\Api\Models\Common\ImageBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductImageAddedMessagePayload>
 */
final class ProductImageAddedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $variantId;

    /**

     * @var null|Image|ImageBuilder
     */
    private $image;

    /**

     * @var ?bool
     */
    private $staged;

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:ProductVariant">Product Variant</a> to which the <a href="ctp:api:type:Image">Image</a> was added.</p>
     *

     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
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
     * <p>Whether the update was only applied to the staged <a href="ctp:api:type:ProductProjection">Product Projection</a>.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
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
     * @deprecated use withImage() instead
     * @return $this
     */
    public function withImageBuilder(?ImageBuilder $image)
    {
        $this->image = $image;

        return $this;
    }

    public function build(): ProductImageAddedMessagePayload
    {
        return new ProductImageAddedMessagePayloadModel(
            $this->variantId,
            $this->image instanceof ImageBuilder ? $this->image->build() : $this->image,
            $this->staged
        );
    }

    public static function of(): ProductImageAddedMessagePayloadBuilder
    {
        return new self();
    }
}
