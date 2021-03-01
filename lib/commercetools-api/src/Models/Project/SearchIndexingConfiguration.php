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

    /**
     * @return null|SearchIndexingConfigurationValues
     */
    public function getProducts();

    /**
     * @param ?SearchIndexingConfigurationValues $products
     */
    public function setProducts(?SearchIndexingConfigurationValues $products): void;
}
