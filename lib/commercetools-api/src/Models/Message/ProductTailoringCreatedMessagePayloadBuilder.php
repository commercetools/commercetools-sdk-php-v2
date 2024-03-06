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
 * @implements Builder<ProductTailoringCreatedMessagePayload>
 */
final class ProductTailoringCreatedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

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
    private $description;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $slug;

    /**

     * @var ?bool
     */
    private $published;

    /**
     * <p>User-defined unique identifier of the Product Tailoring.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

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
     * <p>The description of the <a href="ctp:api:type:ProductTailoring">Product Tailoring</a> at the time of creation.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription()
    {
        return $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description;
    }

    /**
     * <p>The name of the <a href="ctp:api:type:ProductTailoring">Product Tailoring</a> at the time of creation.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>The slug of the <a href="ctp:api:type:ProductTailoring">Product Tailoring</a> at the time of creation.</p>
     *

     * @return null|LocalizedString
     */
    public function getSlug()
    {
        return $this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug;
    }

    /**
     * <p><code>true</code> if the ProductTailoring is published.</p>
     *

     * @return null|bool
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
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
     * @param ?LocalizedString $description
     * @return $this
     */
    public function withDescription(?LocalizedString $description)
    {
        $this->description = $description;

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
     * @param ?LocalizedString $slug
     * @return $this
     */
    public function withSlug(?LocalizedString $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @param ?bool $published
     * @return $this
     */
    public function withPublished(?bool $published)
    {
        $this->published = $published;

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
     * @deprecated use withDescription() instead
     * @return $this
     */
    public function withDescriptionBuilder(?LocalizedStringBuilder $description)
    {
        $this->description = $description;

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
     * @deprecated use withSlug() instead
     * @return $this
     */
    public function withSlugBuilder(?LocalizedStringBuilder $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    public function build(): ProductTailoringCreatedMessagePayload
    {
        return new ProductTailoringCreatedMessagePayloadModel(
            $this->key,
            $this->store instanceof StoreKeyReferenceBuilder ? $this->store->build() : $this->store,
            $this->productKey,
            $this->product instanceof ProductReferenceBuilder ? $this->product->build() : $this->product,
            $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug,
            $this->published
        );
    }

    public static function of(): ProductTailoringCreatedMessagePayloadBuilder
    {
        return new self();
    }
}
