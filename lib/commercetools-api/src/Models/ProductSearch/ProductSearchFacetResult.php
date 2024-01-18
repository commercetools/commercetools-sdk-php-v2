<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchFacetResult extends JsonObject
{
    public const FIELD_RESULTS = 'results';

    /**
     * <p>Results of the facets.</p>
     *

     * @return null|ProductSearchFacetResultExpressionCollection
     */
    public function getResults();

    /**
     * @param ?ProductSearchFacetResultExpressionCollection $results
     */
    public function setResults(?ProductSearchFacetResultExpressionCollection $results): void;
}
