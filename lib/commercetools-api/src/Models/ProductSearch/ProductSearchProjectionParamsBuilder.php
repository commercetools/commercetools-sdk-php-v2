<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSearchProjectionParams>
 */
final class ProductSearchProjectionParamsBuilder implements Builder
{
    /**

     * @var ?array
     */
    private $expand;

    /**

     * @var ?bool
     */
    private $staged;

    /**

     * @var ?string
     */
    private $priceCurrency;

    /**

     * @var ?string
     */
    private $priceCountry;

    /**

     * @var ?string
     */
    private $priceCustomerGroup;

    /**

     * @var ?string
     */
    private $priceChannel;

    /**

     * @var ?array
     */
    private $localeProjection;

    /**

     * @var ?string
     */
    private $storeProjection;

    /**
     * <p>Expands a <code>value</code> of type <a href="ctp:api:type:Reference">Reference</a> in a <a href="ctp:api:type:ProductProjection">ProductProjection</a>.
     * In case the referenced object does not exist, the API returns the non-expanded reference.</p>
     *

     * @return null|array
     */
    public function getExpand()
    {
        return $this->expand;
    }

    /**
     * <p>Set to <code>true</code> to retrieve the <a href="ctp:api:type:CurrentStaged">staged</a> Product Projection</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * <p>The currency used for <a href="/projects/products#price-selection">Price selection</a>.</p>
     *

     * @return null|string
     */
    public function getPriceCurrency()
    {
        return $this->priceCurrency;
    }

    /**
     * <p>The country used for <a href="/projects/products#price-selection">Price selection</a>. Can only be used <strong>in conjunction with</strong> the <code>priceCurrency</code> parameter.</p>
     *

     * @return null|string
     */
    public function getPriceCountry()
    {
        return $this->priceCountry;
    }

    /**
     * <p><code>id</code> of an existing <a href="ctp:api:type:CustomerGroup">CustomerGroup</a> used for <a href="ctp:api:type:ProductPriceSelection">Price selection</a>. Can only be used <strong>in conjunction with</strong> the <code>priceCurrency</code> parameter.</p>
     *

     * @return null|string
     */
    public function getPriceCustomerGroup()
    {
        return $this->priceCustomerGroup;
    }

    /**
     * <p><code>id</code> of an existing <a href="ctp:api:type:Channel">Channel</a> used for <a href="ctp:api:type:ProductPriceSelection">Price selection</a>. Can only be used <strong>in conjunction with</strong> the <code>priceCurrency</code> parameter.</p>
     *

     * @return null|string
     */
    public function getPriceChannel()
    {
        return $this->priceChannel;
    }

    /**
     * <p>Used for <a href="ctp:api:type:ProductProjectionLocales">locale-based projection</a>.</p>
     *

     * @return null|array
     */
    public function getLocaleProjection()
    {
        return $this->localeProjection;
    }

    /**
     * <p><code>key</code> of an existing <a href="ctp:api:type:Store">Store</a>.
     * If the Store has defined some languages, countries, distribution or supply Channels,
     * they are used for projections based on <a href="ctp:api:type:ProductProjectionLocales">locale</a>, <a href="ctp:api:type:ProductProjectionPrices">price</a>,
     * and <a href="ctp:api:type:ProductProjectionInventoryEntries">inventory</a>.
     * If the Store has defined <a href="ctp:api:type:ProductSelection">Product Selections</a>, they have no effect on the results of this query.</p>
     *

     * @return null|string
     */
    public function getStoreProjection()
    {
        return $this->storeProjection;
    }

    /**
     * @param ?array $expand
     * @return $this
     */
    public function withExpand(?array $expand)
    {
        $this->expand = $expand;

        return $this;
    }

    /**
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @param ?string $priceCurrency
     * @return $this
     */
    public function withPriceCurrency(?string $priceCurrency)
    {
        $this->priceCurrency = $priceCurrency;

        return $this;
    }

    /**
     * @param ?string $priceCountry
     * @return $this
     */
    public function withPriceCountry(?string $priceCountry)
    {
        $this->priceCountry = $priceCountry;

        return $this;
    }

    /**
     * @param ?string $priceCustomerGroup
     * @return $this
     */
    public function withPriceCustomerGroup(?string $priceCustomerGroup)
    {
        $this->priceCustomerGroup = $priceCustomerGroup;

        return $this;
    }

    /**
     * @param ?string $priceChannel
     * @return $this
     */
    public function withPriceChannel(?string $priceChannel)
    {
        $this->priceChannel = $priceChannel;

        return $this;
    }

    /**
     * @param ?array $localeProjection
     * @return $this
     */
    public function withLocaleProjection(?array $localeProjection)
    {
        $this->localeProjection = $localeProjection;

        return $this;
    }

    /**
     * @param ?string $storeProjection
     * @return $this
     */
    public function withStoreProjection(?string $storeProjection)
    {
        $this->storeProjection = $storeProjection;

        return $this;
    }


    public function build(): ProductSearchProjectionParams
    {
        return new ProductSearchProjectionParamsModel(
            $this->expand,
            $this->staged,
            $this->priceCurrency,
            $this->priceCountry,
            $this->priceCustomerGroup,
            $this->priceChannel,
            $this->localeProjection,
            $this->storeProjection
        );
    }

    public static function of(): ProductSearchProjectionParamsBuilder
    {
        return new self();
    }
}
