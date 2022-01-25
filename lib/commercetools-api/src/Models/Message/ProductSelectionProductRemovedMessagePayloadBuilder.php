<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Product\ProductReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSelectionProductRemovedMessagePayload>
 */
final class ProductSelectionProductRemovedMessagePayloadBuilder implements Builder
{
    /**
     * @var null|ProductReference|ProductReferenceBuilder
     */
    private $product;

    /**
     * @return null|ProductReference
     */
    public function getProduct()
    {
        return $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product;
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
     * @deprecated use withProduct() instead
     * @return $this
     */
    public function withProductBuilder(?ProductReferenceBuilder $product)
    {
        $this->product = $product;

        return $this;
    }

    public function build(): ProductSelectionProductRemovedMessagePayload
    {
        return new ProductSelectionProductRemovedMessagePayloadModel(
            $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product
        );
    }

    public static function of(): ProductSelectionProductRemovedMessagePayloadBuilder
    {
        return new self();
    }
}
