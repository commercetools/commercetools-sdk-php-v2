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
 * @implements Builder<ProductCreatedMessagePayload>
 */
final class ProductCreatedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|ProductProjection|ProductProjectionBuilder
     */
    private $productProjection;

    /**
     * <p>The staged <a href="ctp:api:type:ProductProjection">Product Projection</a> of the <a href="ctp:api:type:Product">Product</a> at the time of creation.</p>
     *

     * @return null|ProductProjection
     */
    public function getProductProjection()
    {
        return $this->productProjection instanceof ProductProjectionBuilder ? $this->productProjection->build() : $this->productProjection;
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
     * @deprecated use withProductProjection() instead
     * @return $this
     */
    public function withProductProjectionBuilder(?ProductProjectionBuilder $productProjection)
    {
        $this->productProjection = $productProjection;

        return $this;
    }

    public function build(): ProductCreatedMessagePayload
    {
        return new ProductCreatedMessagePayloadModel(
            $this->productProjection instanceof ProductProjectionBuilder ? $this->productProjection->build() : $this->productProjection
        );
    }

    public static function of(): ProductCreatedMessagePayloadBuilder
    {
        return new self();
    }
}
