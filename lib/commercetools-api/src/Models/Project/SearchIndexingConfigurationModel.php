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
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?SearchIndexingConfigurationValues $products = null
    ) {
        $this->products = $products;
    }

    /**
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
     * @param ?SearchIndexingConfigurationValues $products
     */
    public function setProducts(?SearchIndexingConfigurationValues $products): void
    {
        $this->products = $products;
    }
}
