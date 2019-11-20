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

/**
 * @implements Builder<ProductImageAddedMessagePayload>
 */
final class ProductImageAddedMessagePayloadBuilder implements Builder
{
    /**
     * @var Image|?ImageBuilder
     */
    private $image;

    /**
     * @var ?bool
     */
    private $staged;

    /**
     * @var ?int
     */
    private $variantId;

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
     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * @return $this
     */
    public function withImage(?Image $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
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
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

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
            ($this->image instanceof ImageBuilder ? $this->image->build() : $this->image),
            $this->staged,
            $this->variantId
        );
    }

    public static function of(): ProductImageAddedMessagePayloadBuilder
    {
        return new self();
    }
}
