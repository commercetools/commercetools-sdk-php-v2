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
    public const FIELD_ORDERS = 'orders';

    /**
     * <p>Configuration for the <a href="/../api/projects/products-search">Product Projection Search</a> and <a href="/../api/projects/products-suggestions">Product Suggestions</a> endpoints.</p>
     *

     * @return null|SearchIndexingConfigurationValues
     */
    public function getProducts();

    /**
     * <p>Configuration for the <a href="/../api/projects/order-search">Order Search</a> feature.</p>
     *

     * @return null|SearchIndexingConfigurationValues
     */
    public function getOrders();

    /**
     * @param ?SearchIndexingConfigurationValues $products
     */
    public function setProducts(?SearchIndexingConfigurationValues $products): void;

    /**
     * @param ?SearchIndexingConfigurationValues $orders
     */
    public function setOrders(?SearchIndexingConfigurationValues $orders): void;
}
