<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Product\ProductReferenceBuilder;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Store\StoreKeyReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductTailoringUnpublishedMessagePayload>
 */
final class ProductTailoringUnpublishedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|StoreKeyReference|StoreKeyReferenceBuilder
     */
    private $store;

    /**

     * @var ?string
     */
    private $productKey;

    /**

     * @var null|ProductReference|ProductReferenceBuilder
     */
    private $product;

    /**
     * <p>The Store to which the Product Tailoring belongs.</p>
     *

     * @return null|StoreKeyReference
     */
    public function getStore()
    {
        return $this->store instanceof StoreKeyReferenceBuilder ? $this->store->build() : $this->store;
    }

    /**
     * <p>User-defined unique identifier of the Product this Product Tailoring belongs to.</p>
     *

     * @return null|string
     */
    public function getProductKey()
    {
        return $this->productKey;
    }

    /**
     * <p>Reference to the Product the Product Tailoring belongs to.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct()
    {
        return $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product;
    }

    /**
     * @param ?StoreKeyReference $store
     * @return $this
     */
    public function withStore(?StoreKeyReference $store)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * @param ?string $productKey
     * @return $this
     */
    public function withProductKey(?string $productKey)
    {
        $this->productKey = $productKey;

        return $this;
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
     * @deprecated use withStore() instead
     * @return $this
     */
    public function withStoreBuilder(?StoreKeyReferenceBuilder $store)
    {
        $this->store = $store;

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

    public function build(): ProductTailoringUnpublishedMessagePayload
    {
        return new ProductTailoringUnpublishedMessagePayloadModel(
            $this->store instanceof StoreKeyReferenceBuilder ? $this->store->build() : $this->store,
            $this->productKey,
            $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product
        );
    }

    public static function of(): ProductTailoringUnpublishedMessagePayloadBuilder
    {
        return new self();
    }
}
