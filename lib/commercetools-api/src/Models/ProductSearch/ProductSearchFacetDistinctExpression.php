<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchFacetDistinctExpression extends ProductSearchFacetExpression
{
    public const FIELD_DISTINCT = 'distinct';

    /**
     * <p>Definition of the distinct facet.</p>
     *

     * @return null|ProductSearchFacetDistinctValue
     */
    public function getDistinct();

    /**
     * @param ?ProductSearchFacetDistinctValue $distinct
     */
    public function setDistinct(?ProductSearchFacetDistinctValue $distinct): void;
}
