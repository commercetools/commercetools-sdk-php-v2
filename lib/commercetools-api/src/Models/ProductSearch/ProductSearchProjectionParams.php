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
     * <p>The currency used for <a href="/projects/products#price-selection">Price selection</a>.</p>
     *

     * @return null|string
     */
    public function getPriceCurrency();

    /**
     * <p>The country used for <a href="/projects/products#price-selection">Price selection</a>. Can only be used <strong>in conjunction with</strong> the <code>priceCurrency</code> parameter.</p>
     *

     * @return null|string
     */
    public function getPriceCountry();

    /**
     * <p><code>id</code> of an existing <a href="ctp:api:type:CustomerGroup">CustomerGroup</a> used for <a href="ctp:api:type:ProductPriceSelection">Price selection</a>. Can only be used <strong>in conjunction with</strong> the <code>priceCurrency</code> parameter.</p>
     *

     * @return null|string
     */
    public function getPriceCustomerGroup();

    /**
     * <p><code>id</code> of an existing <a href="ctp:api:type:Channel">Channel</a> used for <a href="ctp:api:type:ProductPriceSelection">Price selection</a>. Can only be used <strong>in conjunction with</strong> the <code>priceCurrency</code> parameter.</p>
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
     * If the Store has defined some languages, countries, distribution or supply Channels,
     * they are used for projections based on <a href="ctp:api:type:ProductProjectionLocales">locale</a>, <a href="ctp:api:type:ProductProjectionPrices">price</a>,
     * and <a href="ctp:api:type:ProductProjectionInventoryEntries">inventory</a>.
     * If the Store has defined <a href="ctp:api:type:ProductSelection">Product Selections</a>, they have no effect on the results of this query.</p>
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
