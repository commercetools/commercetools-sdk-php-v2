<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchFacetCountExpression extends ProductSearchFacetExpression
{
    public const FIELD_COUNT = 'count';

    /**
     * <p>Definition of the count facet.</p>
     *

     * @return null|ProductSearchFacetCountValue
     */
    public function getCount();

    /**
     * @param ?ProductSearchFacetCountValue $count
     */
    public function setCount(?ProductSearchFacetCountValue $count): void;
}
