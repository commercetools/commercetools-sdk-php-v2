<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Product\ProductVariant;
use Commercetools\Api\Models\Product\ProductVariantBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductVariantDeletedMessagePayload>
 */
final class ProductVariantDeletedMessagePayloadBuilder implements Builder
{
    /**
     * @var ?array
     */
    private $removedImageUrls;

    /**
     * @var ProductVariant|?ProductVariantBuilder
     */
    private $variant;

    /**
     * @return null|array
     */
    public function getRemovedImageUrls()
    {
        return $this->removedImageUrls;
    }

    /**
     * @return null|ProductVariant
     */
    public function getVariant()
    {
        return $this->variant instanceof ProductVariantBuilder ? $this->variant->build() : $this->variant;
    }

    /**
     * @return $this
     */
    public function withRemovedImageUrls(?array $removedImageUrls)
    {
        $this->removedImageUrls = $removedImageUrls;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVariant(?ProductVariant $variant)
    {
        $this->variant = $variant;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVariantBuilder(?ProductVariantBuilder $variant)
    {
        $this->variant = $variant;

        return $this;
    }

    public function build(): ProductVariantDeletedMessagePayload
    {
        return new ProductVariantDeletedMessagePayloadModel(
            $this->removedImageUrls,
            ($this->variant instanceof ProductVariantBuilder ? $this->variant->build() : $this->variant)
        );
    }

    public static function of(): ProductVariantDeletedMessagePayloadBuilder
    {
        return new self();
    }
}
