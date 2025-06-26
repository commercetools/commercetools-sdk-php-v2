<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SearchIndexingConfiguration>
 */
final class SearchIndexingConfigurationBuilder implements Builder
{
    /**

     * @var null|SearchIndexingConfigurationValues|SearchIndexingConfigurationValuesBuilder
     */
    private $products;

    /**

     * @var null|SearchIndexingConfigurationValues|SearchIndexingConfigurationValuesBuilder
     */
    private $productsSearch;

    /**

     * @var null|SearchIndexingConfigurationValues|SearchIndexingConfigurationValuesBuilder
     */
    private $orders;

    /**

     * @var null|SearchIndexingConfigurationValues|SearchIndexingConfigurationValuesBuilder
     */
    private $customers;

    /**

     * @var null|SearchIndexingConfigurationValues|SearchIndexingConfigurationValuesBuilder
     */
    private $businessUnits;

    /**
     * <p>Configuration for the <a href="/../api/projects/product-projection-search">Product Projection Search</a> and <a href="/../api/projects/search-term-suggestions">Search Term Suggestions</a> APIs.</p>
     *

     * @return null|SearchIndexingConfigurationValues
     */
    public function getProducts()
    {
        return $this->products instanceof SearchIndexingConfigurationValuesBuilder ? $this->products->build() : $this->products;
    }

    /**
     * <p>Configuration for the <a href="/../api/projects/product-search">Product Search</a> feature.</p>
     *

     * @return null|SearchIndexingConfigurationValues
     */
    public function getProductsSearch()
    {
        return $this->productsSearch instanceof SearchIndexingConfigurationValuesBuilder ? $this->productsSearch->build() : $this->productsSearch;
    }

    /**
     * <p>Configuration for the <a href="/../api/projects/order-search">Order Search</a> feature.</p>
     *

     * @return null|SearchIndexingConfigurationValues
     */
    public function getOrders()
    {
        return $this->orders instanceof SearchIndexingConfigurationValuesBuilder ? $this->orders->build() : $this->orders;
    }

    /**
     * <p>Configuration for the <a href="/../api/projects/customer-search">Customer Search</a> feature.</p>
     *

     * @return null|SearchIndexingConfigurationValues
     */
    public function getCustomers()
    {
        return $this->customers instanceof SearchIndexingConfigurationValuesBuilder ? $this->customers->build() : $this->customers;
    }

    /**
     * <p>Configuration for the <a href="/../api/projects/business-unit-search">Business Unit Search</a> feature.</p>
     *

     * @return null|SearchIndexingConfigurationValues
     */
    public function getBusinessUnits()
    {
        return $this->businessUnits instanceof SearchIndexingConfigurationValuesBuilder ? $this->businessUnits->build() : $this->businessUnits;
    }

    /**
     * @param ?SearchIndexingConfigurationValues $products
     * @return $this
     */
    public function withProducts(?SearchIndexingConfigurationValues $products)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * @param ?SearchIndexingConfigurationValues $productsSearch
     * @return $this
     */
    public function withProductsSearch(?SearchIndexingConfigurationValues $productsSearch)
    {
        $this->productsSearch = $productsSearch;

        return $this;
    }

    /**
     * @param ?SearchIndexingConfigurationValues $orders
     * @return $this
     */
    public function withOrders(?SearchIndexingConfigurationValues $orders)
    {
        $this->orders = $orders;

        return $this;
    }

    /**
     * @param ?SearchIndexingConfigurationValues $customers
     * @return $this
     */
    public function withCustomers(?SearchIndexingConfigurationValues $customers)
    {
        $this->customers = $customers;

        return $this;
    }

    /**
     * @param ?SearchIndexingConfigurationValues $businessUnits
     * @return $this
     */
    public function withBusinessUnits(?SearchIndexingConfigurationValues $businessUnits)
    {
        $this->businessUnits = $businessUnits;

        return $this;
    }

    /**
     * @deprecated use withProducts() instead
     * @return $this
     */
    public function withProductsBuilder(?SearchIndexingConfigurationValuesBuilder $products)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * @deprecated use withProductsSearch() instead
     * @return $this
     */
    public function withProductsSearchBuilder(?SearchIndexingConfigurationValuesBuilder $productsSearch)
    {
        $this->productsSearch = $productsSearch;

        return $this;
    }

    /**
     * @deprecated use withOrders() instead
     * @return $this
     */
    public function withOrdersBuilder(?SearchIndexingConfigurationValuesBuilder $orders)
    {
        $this->orders = $orders;

        return $this;
    }

    /**
     * @deprecated use withCustomers() instead
     * @return $this
     */
    public function withCustomersBuilder(?SearchIndexingConfigurationValuesBuilder $customers)
    {
        $this->customers = $customers;

        return $this;
    }

    /**
     * @deprecated use withBusinessUnits() instead
     * @return $this
     */
    public function withBusinessUnitsBuilder(?SearchIndexingConfigurationValuesBuilder $businessUnits)
    {
        $this->businessUnits = $businessUnits;

        return $this;
    }

    public function build(): SearchIndexingConfiguration
    {
        return new SearchIndexingConfigurationModel(
            $this->products instanceof SearchIndexingConfigurationValuesBuilder ? $this->products->build() : $this->products,
            $this->productsSearch instanceof SearchIndexingConfigurationValuesBuilder ? $this->productsSearch->build() : $this->productsSearch,
            $this->orders instanceof SearchIndexingConfigurationValuesBuilder ? $this->orders->build() : $this->orders,
            $this->customers instanceof SearchIndexingConfigurationValuesBuilder ? $this->customers->build() : $this->customers,
            $this->businessUnits instanceof SearchIndexingConfigurationValuesBuilder ? $this->businessUnits->build() : $this->businessUnits
        );
    }

    public static function of(): SearchIndexingConfigurationBuilder
    {
        return new self();
    }
}
