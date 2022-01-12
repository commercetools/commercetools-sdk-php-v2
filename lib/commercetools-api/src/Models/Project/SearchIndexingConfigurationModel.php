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
     * @var ?SearchIndexingConfigurationValues
     */
    protected $products;

    /**
     * @var ?SearchIndexingConfigurationValues
     */
    protected $orders;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?SearchIndexingConfigurationValues $products = null,
        ?SearchIndexingConfigurationValues $orders = null
    ) {
        $this->products = $products;
        $this->orders = $orders;
    }

    /**
     * <p>Configuration for endpoints serving indexed <a href="ctp:api:type:Product">Product</a> information.</p>
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
     * <p>Configuration for the <a href="/../api/projects/order-search">Order Search</a> feature.</p>
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
     * @param ?SearchIndexingConfigurationValues $orders
     */
    public function setOrders(?SearchIndexingConfigurationValues $orders): void
    {
        $this->orders = $orders;
    }
}
