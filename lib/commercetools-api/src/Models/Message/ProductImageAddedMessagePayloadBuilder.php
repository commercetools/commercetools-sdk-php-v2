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
     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * @return null|Image
     */
    public function getImage()
    {
        return $this->image instanceof ImageBuilder ? $this->image->build() : $this->image;
    }

    /**
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
