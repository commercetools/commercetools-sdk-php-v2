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
     * @return null|SearchIndexingConfigurationValues
     */
    public function getProducts()
    {
        return $this->products instanceof SearchIndexingConfigurationValuesBuilder ? $this->products->build() : $this->products;
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
     * @return $this
     */
    public function withProductsBuilder(?SearchIndexingConfigurationValuesBuilder $products)
    {
        $this->products = $products;

        return $this;
    }

    public function build(): SearchIndexingConfiguration
    {
        return new SearchIndexingConfigurationModel(
            $this->products instanceof SearchIndexingConfigurationValuesBuilder ? $this->products->build() : $this->products
        );
    }

    public static function of(): SearchIndexingConfigurationBuilder
    {
        return new self();
    }
}
