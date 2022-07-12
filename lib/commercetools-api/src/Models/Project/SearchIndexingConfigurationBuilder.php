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
    private $orders;

    /**
     * <p>Configuration for the <a href="/../api/projects/products-search">Product Projection Search</a> and <a href="/../api/projects/products-suggestions">Product Suggestions</a> endpoints.</p>
     *

     * @return null|SearchIndexingConfigurationValues
     */
    public function getProducts()
    {
        return $this->products instanceof SearchIndexingConfigurationValuesBuilder ? $this->products->build() : $this->products;
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
     * @param ?SearchIndexingConfigurationValues $products
     * @return $this
     */
    public function withProducts(?SearchIndexingConfigurationValues $products)
    {
        $this->products = $products;

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
     * @deprecated use withProducts() instead
     * @return $this
     */
    public function withProductsBuilder(?SearchIndexingConfigurationValuesBuilder $products)
    {
        $this->products = $products;

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

    public function build(): SearchIndexingConfiguration
    {
        return new SearchIndexingConfigurationModel(
            $this->products instanceof SearchIndexingConfigurationValuesBuilder ? $this->products->build() : $this->products,
            $this->orders instanceof SearchIndexingConfigurationValuesBuilder ? $this->orders->build() : $this->orders
        );
    }

    public static function of(): SearchIndexingConfigurationBuilder
    {
        return new self();
    }
}
