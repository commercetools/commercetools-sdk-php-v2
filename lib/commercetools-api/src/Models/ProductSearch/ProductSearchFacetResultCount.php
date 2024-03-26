<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchFacetResultCount extends ProductSearchFacetResult
{
    public const FIELD_VALUE = 'value';

    /**
     * <p>Number of Products (or Product Variants) matching the query.</p>
     *

     * @return null|int
     */
    public function getValue();

    /**
     * @param ?int $value
     */
    public function setValue(?int $value): void;
}
