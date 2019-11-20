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
 * @implements Builder<ProductPublishedMessagePayload>
 */
final class ProductPublishedMessagePayloadBuilder implements Builder
{
    /**
     * @var ?array
     */
    private $removedImageUrls;

    /**
     * @var ProductProjection|?ProductProjectionBuilder
     */
    private $productProjection;

    /**
     * @var ?string
     */
    private $scope;

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
    public function getProductProjection()
    {
        return $this->productProjection instanceof ProductProjectionBuilder ? $this->productProjection->build() : $this->productProjection;
    }

    /**
     * @return null|string
     */
    public function getScope()
    {
        return $this->scope;
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
    public function withProductProjection(?ProductProjection $productProjection)
    {
        $this->productProjection = $productProjection;

        return $this;
    }

    /**
     * @return $this
     */
    public function withScope(?string $scope)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductProjectionBuilder(?ProductProjectionBuilder $productProjection)
    {
        $this->productProjection = $productProjection;

        return $this;
    }

    public function build(): ProductPublishedMessagePayload
    {
        return new ProductPublishedMessagePayloadModel(
            $this->removedImageUrls,
            ($this->productProjection instanceof ProductProjectionBuilder ? $this->productProjection->build() : $this->productProjection),
            $this->scope
        );
    }

    public static function of(): ProductPublishedMessagePayloadBuilder
    {
        return new self();
    }
}
