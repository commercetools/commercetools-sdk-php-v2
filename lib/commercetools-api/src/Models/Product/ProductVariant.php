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
use Commercetools\Api\Models\Common\ScopedPrice;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductVariant extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_SKU = 'sku';
    public const FIELD_KEY = 'key';
    public const FIELD_PRICES = 'prices';
    public const FIELD_ATTRIBUTES = 'attributes';
    public const FIELD_PRICE = 'price';
    public const FIELD_IMAGES = 'images';
    public const FIELD_ASSETS = 'assets';
    public const FIELD_AVAILABILITY = 'availability';
    public const FIELD_IS_MATCHING_VARIANT = 'isMatchingVariant';
    public const FIELD_SCOPED_PRICE = 'scopedPrice';
    public const FIELD_SCOPED_PRICE_DISCOUNTED = 'scopedPriceDiscounted';

    /**
     * <p>A unique, sequential identifier of the Product Variant within the Product.</p>
     *

     * @return null|int
     */
    public function getId();

    /**
     * <p>User-defined unique SKU of the Product Variant.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>User-defined unique identifier of the ProductVariant.</p>
     * <p>This is different from <a href="ctp:api:type:Product">Product</a> <code>key</code>.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>The Embedded Prices of the Product Variant.
     * Cannot contain two Prices of the same Price scope (with same currency, country, Customer Group, Channel, <code>validFrom</code> and <code>validUntil</code>).</p>
     *

     * @return null|EmbeddedPriceCollection
     */
    public function getPrices();

    /**
     * <p>Attributes of the Product Variant.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes();

    /**
     * <p>Only available when <a href="#price-selection">Price selection</a> is used.
     * Cannot be used in a <a href="ctp:api:type:QueryPredicate">Query Predicate</a>.</p>
     *

     * @return null|Price
     */
    public function getPrice();

    /**
     * <p>Images of the Product Variant.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages();

    /**
     * <p>Media assets of the Product Variant.</p>
     *

     * @return null|AssetCollection
     */
    public function getAssets();

    /**
     * <p>Set if the Product Variant is tracked by <a href="ctp:api:type:InventoryEntry">Inventory</a>.
     * Can be used as an optimization to reduce calls to the Inventory service.
     * May not contain the latest Inventory State (it is <a href="/general-concepts#eventual-consistency">eventually consistent</a>).</p>
     *

     * @return null|ProductVariantAvailability
     */
    public function getAvailability();

    /**
     * <p><code>true</code> if the Product Variant matches the search query.
     * Only available in response to a <a href="ctp:api:type:ProductProjectionSearch">Product Projection Search</a> request.</p>
     *

     * @return null|bool
     */
    public function getIsMatchingVariant();

    /**
     * <p>Only available in response to a <a href="ctp:api:type:ProductProjectionSearch">Product Projection Search</a> request
     * with <a href="ctp:api:type:ProductPriceSelection">price selection</a>.
     * Can be used to sort, <a href="ctp:api:type:ProductProjectionSearchFilterScopedPrice">filter</a>, and facet.</p>
     *

     * @return null|ScopedPrice
     */
    public function getScopedPrice();

    /**
     * <p>Only available in response to a <a href="ctp:api:type:ProductProjectionSearchFilterScopedPrice">Product Projection Search</a> request
     * with <a href="ctp:api:type:ProductPriceSelection">price selection</a>.</p>
     *

     * @return null|bool
     */
    public function getScopedPriceDiscounted();

    /**
     * @param ?int $id
     */
    public function setId(?int $id): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?EmbeddedPriceCollection $prices
     */
    public function setPrices(?EmbeddedPriceCollection $prices): void;

    /**
     * @param ?AttributeCollection $attributes
     */
    public function setAttributes(?AttributeCollection $attributes): void;

    /**
     * @param ?Price $price
     */
    public function setPrice(?Price $price): void;

    /**
     * @param ?ImageCollection $images
     */
    public function setImages(?ImageCollection $images): void;

    /**
     * @param ?AssetCollection $assets
     */
    public function setAssets(?AssetCollection $assets): void;

    /**
     * @param ?ProductVariantAvailability $availability
     */
    public function setAvailability(?ProductVariantAvailability $availability): void;

    /**
     * @param ?bool $isMatchingVariant
     */
    public function setIsMatchingVariant(?bool $isMatchingVariant): void;

    /**
     * @param ?ScopedPrice $scopedPrice
     */
    public function setScopedPrice(?ScopedPrice $scopedPrice): void;

    /**
     * @param ?bool $scopedPriceDiscounted
     */
    public function setScopedPriceDiscounted(?bool $scopedPriceDiscounted): void;
}
