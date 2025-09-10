<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSearchProjectionParamsModel extends JsonObjectModel implements ProductSearchProjectionParams
{
    /**
     *
     * @var ?array
     */
    protected $expand;

    /**
     *
     * @var ?bool
     */
    protected $staged;

    /**
     *
     * @var ?string
     */
    protected $priceCurrency;

    /**
     *
     * @var ?string
     */
    protected $priceCountry;

    /**
     *
     * @var ?string
     */
    protected $priceCustomerGroup;

    /**
     *
     * @var ?array
     */
    protected $priceCustomerGroupAssignments;

    /**
     *
     * @var ?string
     */
    protected $priceChannel;

    /**
     *
     * @var ?array
     */
    protected $localeProjection;

    /**
     *
     * @var ?string
     */
    protected $storeProjection;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?array $expand = null,
        ?bool $staged = null,
        ?string $priceCurrency = null,
        ?string $priceCountry = null,
        ?string $priceCustomerGroup = null,
        ?array $priceCustomerGroupAssignments = null,
        ?string $priceChannel = null,
        ?array $localeProjection = null,
        ?string $storeProjection = null
    ) {
        $this->expand = $expand;
        $this->staged = $staged;
        $this->priceCurrency = $priceCurrency;
        $this->priceCountry = $priceCountry;
        $this->priceCustomerGroup = $priceCustomerGroup;
        $this->priceCustomerGroupAssignments = $priceCustomerGroupAssignments;
        $this->priceChannel = $priceChannel;
        $this->localeProjection = $localeProjection;
        $this->storeProjection = $storeProjection;
    }

    /**
     * <p>Expands a <code>value</code> of type <a href="ctp:api:type:Reference">Reference</a> in a <a href="ctp:api:type:ProductProjection">ProductProjection</a>.
     * In case the referenced object does not exist, the API returns the non-expanded reference.</p>
     *
     *
     * @return null|array
     */
    public function getExpand()
    {
        if (is_null($this->expand)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_EXPAND);
            if (is_null($data)) {
                return null;
            }
            $this->expand = $data;
        }

        return $this->expand;
    }

    /**
     * <p>Set to <code>true</code> to retrieve the <a href="ctp:api:type:CurrentStaged">staged</a> Product Projection</p>
     *
     *
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }

    /**
     * <p>The currency used for <a href="/../api/pricing-and-discounts-overview#product-price-selection">Product price selection</a>.</p>
     *
     *
     * @return null|string
     */
    public function getPriceCurrency()
    {
        if (is_null($this->priceCurrency)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRICE_CURRENCY);
            if (is_null($data)) {
                return null;
            }
            $this->priceCurrency = (string) $data;
        }

        return $this->priceCurrency;
    }

    /**
     * <p>The country used for <a href="/../api/pricing-and-discounts-overview#product-price-selection">Product price selection</a>. It can be used only <em>in conjunction with</em> the <code>priceCurrency</code> parameter.</p>
     *
     *
     * @return null|string
     */
    public function getPriceCountry()
    {
        if (is_null($this->priceCountry)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRICE_COUNTRY);
            if (is_null($data)) {
                return null;
            }
            $this->priceCountry = (string) $data;
        }

        return $this->priceCountry;
    }

    /**
     * <p><code>id</code> of an existing <a href="ctp:api:type:CustomerGroup">CustomerGroup</a> used for <a href="/../api/pricing-and-discounts-overview#product-price-selection">Product price selection</a>. It can be used only <em>in conjunction with</em> the <code>priceCurrency</code> parameter.</p>
     *
     *
     * @return null|string
     */
    public function getPriceCustomerGroup()
    {
        if (is_null($this->priceCustomerGroup)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRICE_CUSTOMER_GROUP);
            if (is_null($data)) {
                return null;
            }
            $this->priceCustomerGroup = (string) $data;
        }

        return $this->priceCustomerGroup;
    }

    /**
     * <p>IDs of existing <a href="ctp:api:type:CustomerGroup">CustomerGroups</a> used for <a href="/../api/pricing-and-discounts-overview#product-price-selection">Product price selection</a>, when using <a href="/../api/customers-overview#customer-groups">multiple Customer Groups</a>. It can be used only <em>in conjunction with</em> the <code>priceCurrency</code> parameter.</p>
     *
     *
     * @return null|array
     */
    public function getPriceCustomerGroupAssignments()
    {
        if (is_null($this->priceCustomerGroupAssignments)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_PRICE_CUSTOMER_GROUP_ASSIGNMENTS);
            if (is_null($data)) {
                return null;
            }
            $this->priceCustomerGroupAssignments = $data;
        }

        return $this->priceCustomerGroupAssignments;
    }

    /**
     * <p><code>id</code> of an existing <a href="ctp:api:type:Channel">Channel</a> used for <a href="/../api/pricing-and-discounts-overview#product-price-selection">Product price selection</a>. It can be used only <em>in conjunction with</em> the <code>priceCurrency</code> parameter.</p>
     *
     *
     * @return null|string
     */
    public function getPriceChannel()
    {
        if (is_null($this->priceChannel)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRICE_CHANNEL);
            if (is_null($data)) {
                return null;
            }
            $this->priceChannel = (string) $data;
        }

        return $this->priceChannel;
    }

    /**
     * <p>Used for <a href="ctp:api:type:ProductProjectionLocales">locale-based projection</a>.</p>
     *
     *
     * @return null|array
     */
    public function getLocaleProjection()
    {
        if (is_null($this->localeProjection)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_LOCALE_PROJECTION);
            if (is_null($data)) {
                return null;
            }
            $this->localeProjection = $data;
        }

        return $this->localeProjection;
    }

    /**
     * <p><code>key</code> of an existing <a href="ctp:api:type:Store">Store</a>.
     * If the Store has defined <code>languages</code>, <code>countries</code>, <code>distributionChannels</code>, or <code>supplyChannels</code>,
     * they are used for projections based on <a href="ctp:api:type:ProductProjectionLocales">locale</a>, <a href="ctp:api:type:ProductProjectionPrices">price</a>,
     * and <a href="ctp:api:type:ProductProjectionInventoryEntries">inventory</a>.
     * For Projects with active <a href="/../api/projects/product-selections">Product Selections</a>, the API does not take the <a href="/../api/projects/stores#products-available-in-store">availability of the Product in the specified Store</a> into account.
     * <a href="/../api/projects/product-tailoring">Product Tailoring</a> modifies the product information returned in API responses. However, you can only specify <a href="/../api/search-query-language#simple-expressions">query expressions</a> for the original product data, not for tailored data.</p>
     *
     *
     * @return null|string
     */
    public function getStoreProjection()
    {
        if (is_null($this->storeProjection)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STORE_PROJECTION);
            if (is_null($data)) {
                return null;
            }
            $this->storeProjection = (string) $data;
        }

        return $this->storeProjection;
    }


    /**
     * @param ?array $expand
     */
    public function setExpand(?array $expand): void
    {
        $this->expand = $expand;
    }

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }

    /**
     * @param ?string $priceCurrency
     */
    public function setPriceCurrency(?string $priceCurrency): void
    {
        $this->priceCurrency = $priceCurrency;
    }

    /**
     * @param ?string $priceCountry
     */
    public function setPriceCountry(?string $priceCountry): void
    {
        $this->priceCountry = $priceCountry;
    }

    /**
     * @param ?string $priceCustomerGroup
     */
    public function setPriceCustomerGroup(?string $priceCustomerGroup): void
    {
        $this->priceCustomerGroup = $priceCustomerGroup;
    }

    /**
     * @param ?array $priceCustomerGroupAssignments
     */
    public function setPriceCustomerGroupAssignments(?array $priceCustomerGroupAssignments): void
    {
        $this->priceCustomerGroupAssignments = $priceCustomerGroupAssignments;
    }

    /**
     * @param ?string $priceChannel
     */
    public function setPriceChannel(?string $priceChannel): void
    {
        $this->priceChannel = $priceChannel;
    }

    /**
     * @param ?array $localeProjection
     */
    public function setLocaleProjection(?array $localeProjection): void
    {
        $this->localeProjection = $localeProjection;
    }

    /**
     * @param ?string $storeProjection
     */
    public function setStoreProjection(?string $storeProjection): void
    {
        $this->storeProjection = $storeProjection;
    }
}
