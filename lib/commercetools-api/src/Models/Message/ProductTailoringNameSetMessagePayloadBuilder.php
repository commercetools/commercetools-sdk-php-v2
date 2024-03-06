<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
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
 * @implements Builder<ProductTailoringNameSetMessagePayload>
 */
final class ProductTailoringNameSetMessagePayloadBuilder implements Builder
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

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $oldName;

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
     * <p>The name of the <a href="ctp:api:type:ProductTailoring">Product Tailoring</a> after the <a href="ctp:api:type:ProductTailoringSetNameAction">Set Name</a> update action.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>The name of the <a href="ctp:api:type:ProductTailoring">ProductTailoring</a> before the <a href="ctp:api:type:ProductTailoringSetNameAction">Set Name</a> update action.</p>
     *

     * @return null|LocalizedString
     */
    public function getOldName()
    {
        return $this->oldName instanceof LocalizedStringBuilder ? $this->oldName->build() : $this->oldName;
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
     * @param ?LocalizedString $name
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?LocalizedString $oldName
     * @return $this
     */
    public function withOldName(?LocalizedString $oldName)
    {
        $this->oldName = $oldName;

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

    /**
     * @deprecated use withName() instead
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @deprecated use withOldName() instead
     * @return $this
     */
    public function withOldNameBuilder(?LocalizedStringBuilder $oldName)
    {
        $this->oldName = $oldName;

        return $this;
    }

    public function build(): ProductTailoringNameSetMessagePayload
    {
        return new ProductTailoringNameSetMessagePayloadModel(
            $this->store instanceof StoreKeyReferenceBuilder ? $this->store->build() : $this->store,
            $this->productKey,
            $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->oldName instanceof LocalizedStringBuilder ? $this->oldName->build() : $this->oldName
        );
    }

    public static function of(): ProductTailoringNameSetMessagePayloadBuilder
    {
        return new self();
    }
}
