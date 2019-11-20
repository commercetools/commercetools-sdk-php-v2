<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Product\ProductProjection;
use Commercetools\Api\Models\Product\ProductProjectionBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductDeletedMessagePayload>
 */
final class ProductDeletedMessagePayloadBuilder implements Builder
{
    /**
     * @var ?array
     */
    private $removedImageUrls;

    /**
     * @var ProductProjection|?ProductProjectionBuilder
     */
    private $currentProjection;

    /**
     * @return null|array
     */
    public function getRemovedImageUrls()
    {
        return $this->removedImageUrls;
    }

    /**
     * @return null|ProductProjection
     */
    public function getCurrentProjection()
    {
        return $this->currentProjection instanceof ProductProjectionBuilder ? $this->currentProjection->build() : $this->currentProjection;
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
    public function withCurrentProjection(?ProductProjection $currentProjection)
    {
        $this->currentProjection = $currentProjection;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCurrentProjectionBuilder(?ProductProjectionBuilder $currentProjection)
    {
        $this->currentProjection = $currentProjection;

        return $this;
    }

    public function build(): ProductDeletedMessagePayload
    {
        return new ProductDeletedMessagePayloadModel(
            $this->removedImageUrls,
            ($this->currentProjection instanceof ProductProjectionBuilder ? $this->currentProjection->build() : $this->currentProjection)
        );
    }

    public static function of(): ProductDeletedMessagePayloadBuilder
    {
        return new self();
    }
}
