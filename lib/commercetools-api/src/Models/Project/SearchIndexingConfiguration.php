<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SearchIndexingConfiguration extends JsonObject
{
    public const FIELD_PRODUCTS = 'products';
    public const FIELD_PRODUCTS_SEARCH = 'productsSearch';
    public const FIELD_ORDERS = 'orders';
    public const FIELD_CUSTOMERS = 'customers';
    public const FIELD_BUSINESS_UNITS = 'businessUnits';

    /**
     * <p>Configuration for the <a href="/../api/projects/product-projection-search">Product Projection Search</a> and <a href="/../api/projects/search-term-suggestions">Search Term Suggestions</a> APIs.</p>
     *

     * @return null|SearchIndexingConfigurationValues
     */
    public function getProducts();

    /**
     * <p>Configuration for the <a href="/../api/projects/product-search">Product Search</a> feature.</p>
     *

     * @return null|SearchIndexingConfigurationValues
     */
    public function getProductsSearch();

    /**
     * <p>Configuration for the <a href="/../api/projects/order-search">Order Search</a> feature.</p>
     *

     * @return null|SearchIndexingConfigurationValues
     */
    public function getOrders();

    /**
     * <p>Configuration for the <a href="/../api/projects/customer-search">Customer Search</a> feature.</p>
     *

     * @return null|SearchIndexingConfigurationValues
     */
    public function getCustomers();

    /**
     * <p>Configuration for the <a href="/../api/projects/business-unit-search">Business Unit Search</a> feature.</p>
     *

     * @return null|SearchIndexingConfigurationValues
     */
    public function getBusinessUnits();

    /**
     * @param ?SearchIndexingConfigurationValues $products
     */
    public function setProducts(?SearchIndexingConfigurationValues $products): void;

    /**
     * @param ?SearchIndexingConfigurationValues $productsSearch
     */
    public function setProductsSearch(?SearchIndexingConfigurationValues $productsSearch): void;

    /**
     * @param ?SearchIndexingConfigurationValues $orders
     */
    public function setOrders(?SearchIndexingConfigurationValues $orders): void;

    /**
     * @param ?SearchIndexingConfigurationValues $customers
     */
    public function setCustomers(?SearchIndexingConfigurationValues $customers): void;

    /**
     * @param ?SearchIndexingConfigurationValues $businessUnits
     */
    public function setBusinessUnits(?SearchIndexingConfigurationValues $businessUnits): void;
}
