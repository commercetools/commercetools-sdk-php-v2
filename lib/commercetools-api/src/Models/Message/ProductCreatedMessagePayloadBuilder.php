<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Product\ProductProjection;
use Commercetools\Api\Models\Product\ProductProjectionBuilder;

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
     * @return null|ProductProjection
     */
    public function getProductProjection()
    {
        return $this->productProjection instanceof ProductProjectionBuilder ? $this->productProjection->build() : $this->productProjection;
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
