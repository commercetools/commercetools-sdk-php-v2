<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\AssetCollection;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Common\PriceBuilder;
use Commercetools\Api\Models\Common\ScopedPrice;
use Commercetools\Api\Models\Common\ScopedPriceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductVariant>
 */
final class ProductVariantBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $id;

    /**

     * @var ?string
     */
    private $sku;

    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?EmbeddedPriceCollection
     */
    private $prices;

    /**

     * @var ?AttributeCollection
     */
    private $attributes;

    /**

     * @var null|Price|PriceBuilder
     */
    private $price;

    /**

     * @var ?ImageCollection
     */
    private $images;

    /**

     * @var ?AssetCollection
     */
    private $assets;

    /**

     * @var null|ProductVariantAvailability|ProductVariantAvailabilityBuilder
     */
    private $availability;

    /**

     * @var ?bool
     */
    private $isMatchingVariant;

    /**

     * @var null|ScopedPrice|ScopedPriceBuilder
     */
    private $scopedPrice;

    /**

     * @var ?bool
     */
    private $scopedPriceDiscounted;

    /**
     * <p>A unique, sequential identifier of the Product Variant within the Product.</p>
     *

     * @return null|int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>User-defined unique SKU of the Product Variant.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>User-defined unique identifier of the ProductVariant.</p>
     * <p>This is different from <a href="ctp:api:type:Product">Product</a> <code>key</code>.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>The Embedded Prices of the Product Variant.
     * Cannot contain two Prices of the same Price scope (with same currency, country, Customer Group, Channel, <code>validFrom</code> and <code>validUntil</code>).</p>
     *

     * @return null|EmbeddedPriceCollection
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * <p>Attributes of the Product Variant.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * <p>Only available when <a href="#price-selection">Price selection</a> is used.
     * Cannot be used in a <a href="ctp:api:type:QueryPredicate">Query Predicate</a>.</p>
     *

     * @return null|Price
     */
    public function getPrice()
    {
        return $this->price instanceof PriceBuilder ? $this->price->build() : $this->price;
    }

    /**
     * <p>Images of the Product Variant.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * <p>Media assets of the Product Variant.</p>
     *

     * @return null|AssetCollection
     */
    public function getAssets()
    {
        return $this->assets;
    }

    /**
     * <p>Set if the Product Variant is tracked by <a href="ctp:api:type:InventoryEntry">Inventory</a>.
     * Can be used as an optimization to reduce calls to the Inventory service.
     * May not contain the latest Inventory State (it is <a href="/general-concepts#eventual-consistency">eventually consistent</a>).</p>
     *

     * @return null|ProductVariantAvailability
     */
    public function getAvailability()
    {
        return $this->availability instanceof ProductVariantAvailabilityBuilder ? $this->availability->build() : $this->availability;
    }

    /**
     * <p><code>true</code> if the Product Variant matches the search query.
     * Only available in response to a <a href="ctp:api:type:ProductProjectionSearch">Product Projection Search</a> request.</p>
     *

     * @return null|bool
     */
    public function getIsMatchingVariant()
    {
        return $this->isMatchingVariant;
    }

    /**
     * <p>Only available in response to a <a href="ctp:api:type:ProductProjectionSearch">Product Projection Search</a> request
     * with <a href="ctp:api:type:ProductPriceSelection">price selection</a>.
     * Can be used to sort, <a href="ctp:api:type:ProductProjectionSearchFilterScopedPrice">filter</a>, and facet.</p>
     *

     * @return null|ScopedPrice
     */
    public function getScopedPrice()
    {
        return $this->scopedPrice instanceof ScopedPriceBuilder ? $this->scopedPrice->build() : $this->scopedPrice;
    }

    /**
     * <p>Only available in response to a <a href="ctp:api:type:ProductProjectionSearchFilterScopedPrice">Product Projection Search</a> request
     * with <a href="ctp:api:type:ProductPriceSelection">price selection</a>.</p>
     *

     * @return null|bool
     */
    public function getScopedPriceDiscounted()
    {
        return $this->scopedPriceDiscounted;
    }

    /**
     * @param ?int $id
     * @return $this
     */
    public function withId(?int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?string $sku
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
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
     * @param ?EmbeddedPriceCollection $prices
     * @return $this
     */
    public function withPrices(?EmbeddedPriceCollection $prices)
    {
        $this->prices = $prices;

        return $this;
    }

    /**
     * @param ?AttributeCollection $attributes
     * @return $this
     */
    public function withAttributes(?AttributeCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @param ?Price $price
     * @return $this
     */
    public function withPrice(?Price $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @param ?ImageCollection $images
     * @return $this
     */
    public function withImages(?ImageCollection $images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * @param ?AssetCollection $assets
     * @return $this
     */
    public function withAssets(?AssetCollection $assets)
    {
        $this->assets = $assets;

        return $this;
    }

    /**
     * @param ?ProductVariantAvailability $availability
     * @return $this
     */
    public function withAvailability(?ProductVariantAvailability $availability)
    {
        $this->availability = $availability;

        return $this;
    }

    /**
     * @param ?bool $isMatchingVariant
     * @return $this
     */
    public function withIsMatchingVariant(?bool $isMatchingVariant)
    {
        $this->isMatchingVariant = $isMatchingVariant;

        return $this;
    }

    /**
     * @param ?ScopedPrice $scopedPrice
     * @return $this
     */
    public function withScopedPrice(?ScopedPrice $scopedPrice)
    {
        $this->scopedPrice = $scopedPrice;

        return $this;
    }

    /**
     * @param ?bool $scopedPriceDiscounted
     * @return $this
     */
    public function withScopedPriceDiscounted(?bool $scopedPriceDiscounted)
    {
        $this->scopedPriceDiscounted = $scopedPriceDiscounted;

        return $this;
    }

    /**
     * @deprecated use withPrice() instead
     * @return $this
     */
    public function withPriceBuilder(?PriceBuilder $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @deprecated use withAvailability() instead
     * @return $this
     */
    public function withAvailabilityBuilder(?ProductVariantAvailabilityBuilder $availability)
    {
        $this->availability = $availability;

        return $this;
    }

    /**
     * @deprecated use withScopedPrice() instead
     * @return $this
     */
    public function withScopedPriceBuilder(?ScopedPriceBuilder $scopedPrice)
    {
        $this->scopedPrice = $scopedPrice;

        return $this;
    }

    public function build(): ProductVariant
    {
        return new ProductVariantModel(
            $this->id,
            $this->sku,
            $this->key,
            $this->prices,
            $this->attributes,
            $this->price instanceof PriceBuilder ? $this->price->build() : $this->price,
            $this->images,
            $this->assets,
            $this->availability instanceof ProductVariantAvailabilityBuilder ? $this->availability->build() : $this->availability,
            $this->isMatchingVariant,
            $this->scopedPrice instanceof ScopedPriceBuilder ? $this->scopedPrice->build() : $this->scopedPrice,
            $this->scopedPriceDiscounted
        );
    }

    public static function of(): ProductVariantBuilder
    {
        return new self();
    }
}
