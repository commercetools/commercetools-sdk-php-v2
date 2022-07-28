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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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

     * @var null|ProductProjection|ProductProjectionBuilder
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
     * <p>The scope controls which part of the product information is published.</p>
     *

     * @return null|string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param ?array $removedImageUrls
     * @return $this
     */
    public function withRemovedImageUrls(?array $removedImageUrls)
    {
        $this->removedImageUrls = $removedImageUrls;

        return $this;
    }

    /**
     * @param ?ProductProjection $productProjection
     * @return $this
     */
    public function withProductProjection(?ProductProjection $productProjection)
    {
        $this->productProjection = $productProjection;

        return $this;
    }

    /**
     * @param ?string $scope
     * @return $this
     */
    public function withScope(?string $scope)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * @deprecated use withProductProjection() instead
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
            $this->productProjection instanceof ProductProjectionBuilder ? $this->productProjection->build() : $this->productProjection,
            $this->scope
        );
    }

    public static function of(): ProductPublishedMessagePayloadBuilder
    {
        return new self();
    }
}
