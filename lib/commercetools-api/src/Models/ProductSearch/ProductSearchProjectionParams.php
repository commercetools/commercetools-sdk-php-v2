<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchProjectionParams extends JsonObject
{
    public const FIELD_EXPAND = 'expand';
    public const FIELD_STAGED = 'staged';
    public const FIELD_PRICE_CURRENCY = 'priceCurrency';
    public const FIELD_PRICE_COUNTRY = 'priceCountry';
    public const FIELD_PRICE_CUSTOMER_GROUP = 'priceCustomerGroup';
    public const FIELD_PRICE_CUSTOMER_GROUP_ASSIGNMENTS = 'priceCustomerGroupAssignments';
    public const FIELD_PRICE_CHANNEL = 'priceChannel';
    public const FIELD_LOCALE_PROJECTION = 'localeProjection';
    public const FIELD_STORE_PROJECTION = 'storeProjection';

    /**
     * <p>Expands a <code>value</code> of type <a href="ctp:api:type:Reference">Reference</a> in a <a href="ctp:api:type:ProductProjection">ProductProjection</a>.
     * In case the referenced object does not exist, the API returns the non-expanded reference.</p>
     *

     * @return null|array
     */
    public function getExpand();

    /**
     * <p>Set to <code>true</code> to retrieve the <a href="ctp:api:type:CurrentStaged">staged</a> Product Projection</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * <p>The currency used for <a href="/../api/pricing-and-discounts-overview#product-price-selection">Product price selection</a>.</p>
     *

     * @return null|string
     */
    public function getPriceCurrency();

    /**
     * <p>The country used for <a href="/../api/pricing-and-discounts-overview#product-price-selection">Product price selection</a>. It can be used only <em>in conjunction with</em> the <code>priceCurrency</code> parameter.</p>
     *

     * @return null|string
     */
    public function getPriceCountry();

    /**
     * <p><code>id</code> of an existing <a href="ctp:api:type:CustomerGroup">CustomerGroup</a> used for <a href="/../api/pricing-and-discounts-overview#product-price-selection">Product price selection</a>. It can be used only <em>in conjunction with</em> the <code>priceCurrency</code> parameter.</p>
     *

     * @return null|string
     */
    public function getPriceCustomerGroup();

    /**
     * <p>IDs of existing <a href="ctp:api:type:CustomerGroup">CustomerGroups</a> used for <a href="/../api/pricing-and-discounts-overview#product-price-selection">Product price selection</a>, when using <a href="/../api/customers-overview#customer-groups">multiple Customer Groups</a>. It can be used only <em>in conjunction with</em> the <code>priceCurrency</code> parameter.</p>
     *

     * @return null|array
     */
    public function getPriceCustomerGroupAssignments();

    /**
     * <p><code>id</code> of an existing <a href="ctp:api:type:Channel">Channel</a> used for <a href="/../api/pricing-and-discounts-overview#product-price-selection">Product price selection</a>. It can be used only <em>in conjunction with</em> the <code>priceCurrency</code> parameter.</p>
     *

     * @return null|string
     */
    public function getPriceChannel();

    /**
     * <p>Used for <a href="ctp:api:type:ProductProjectionLocales">locale-based projection</a>.</p>
     *

     * @return null|array
     */
    public function getLocaleProjection();

    /**
     * <p><code>key</code> of an existing <a href="ctp:api:type:Store">Store</a>.
     * If the Store has defined <code>languages</code>, <code>countries</code>, <code>distributionChannels</code>, or <code>supplyChannels</code>,
     * they are used for projections based on <a href="ctp:api:type:ProductProjectionLocales">locale</a>, <a href="ctp:api:type:ProductProjectionPrices">price</a>,
     * and <a href="ctp:api:type:ProductProjectionInventoryEntries">inventory</a>.</p>
     * <p>For Projects with active <a href="/api/projects/product-selections">Product Selections</a>, the API does not take the <a href="/api/project-configuration-overview#products-available-in-store">availability of the Product in the specified Store</a> into account.</p>
     * <p><a href="/api/projects/product-tailoring">Product Tailoring</a> modifies the product information returned in API responses. However, you can only specify <a href="/api/search-query-language#simple-expressions">query expressions</a> for the original Product data, not for tailored data.</p>
     *

     * @return null|string
     */
    public function getStoreProjection();

    /**
     * @param ?array $expand
     */
    public function setExpand(?array $expand): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;

    /**
     * @param ?string $priceCurrency
     */
    public function setPriceCurrency(?string $priceCurrency): void;

    /**
     * @param ?string $priceCountry
     */
    public function setPriceCountry(?string $priceCountry): void;

    /**
     * @param ?string $priceCustomerGroup
     */
    public function setPriceCustomerGroup(?string $priceCustomerGroup): void;

    /**
     * @param ?array $priceCustomerGroupAssignments
     */
    public function setPriceCustomerGroupAssignments(?array $priceCustomerGroupAssignments): void;

    /**
     * @param ?string $priceChannel
     */
    public function setPriceChannel(?string $priceChannel): void;

    /**
     * @param ?array $localeProjection
     */
    public function setLocaleProjection(?array $localeProjection): void;

    /**
     * @param ?string $storeProjection
     */
    public function setStoreProjection(?string $storeProjection): void;
}
