<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class SearchIndexingConfigurationModel extends JsonObjectModel implements SearchIndexingConfiguration
{
    /**
     *
     * @var ?SearchIndexingConfigurationValues
     */
    protected $products;

    /**
     *
     * @var ?SearchIndexingConfigurationValues
     */
    protected $productsSearch;

    /**
     *
     * @var ?SearchIndexingConfigurationValues
     */
    protected $orders;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?SearchIndexingConfigurationValues $products = null,
        ?SearchIndexingConfigurationValues $productsSearch = null,
        ?SearchIndexingConfigurationValues $orders = null
    ) {
        $this->products = $products;
        $this->productsSearch = $productsSearch;
        $this->orders = $orders;
    }

    /**
     * <p>Configuration for the <a href="/../api/projects/products-search">Product Projection Search</a> and <a href="/../api/projects/products-suggestions">Product Suggestions</a> endpoints.</p>
     *
     *
     * @return null|SearchIndexingConfigurationValues
     */
    public function getProducts()
    {
        if (is_null($this->products)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCTS);
            if (is_null($data)) {
                return null;
            }

            $this->products = SearchIndexingConfigurationValuesModel::of($data);
        }

        return $this->products;
    }

    /**
     * <p>Configuration for the <a href="/../api/projects/product-search">Product Search</a> feature.</p>
     *
     *
     * @return null|SearchIndexingConfigurationValues
     */
    public function getProductsSearch()
    {
        if (is_null($this->productsSearch)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCTS_SEARCH);
            if (is_null($data)) {
                return null;
            }

            $this->productsSearch = SearchIndexingConfigurationValuesModel::of($data);
        }

        return $this->productsSearch;
    }

    /**
     * <p>Configuration for the <a href="/../api/projects/order-search">Order Search</a> feature.</p>
     *
     *
     * @return null|SearchIndexingConfigurationValues
     */
    public function getOrders()
    {
        if (is_null($this->orders)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ORDERS);
            if (is_null($data)) {
                return null;
            }

            $this->orders = SearchIndexingConfigurationValuesModel::of($data);
        }

        return $this->orders;
    }


    /**
     * @param ?SearchIndexingConfigurationValues $products
     */
    public function setProducts(?SearchIndexingConfigurationValues $products): void
    {
        $this->products = $products;
    }

    /**
     * @param ?SearchIndexingConfigurationValues $productsSearch
     */
    public function setProductsSearch(?SearchIndexingConfigurationValues $productsSearch): void
    {
        $this->productsSearch = $productsSearch;
    }

    /**
     * @param ?SearchIndexingConfigurationValues $orders
     */
    public function setOrders(?SearchIndexingConfigurationValues $orders): void
    {
        $this->orders = $orders;
    }
}
