<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchFacetStatsExpression extends ProductSearchFacetExpression
{
    public const FIELD_STATS = 'stats';

    /**
     * <p>Definition of the stats facet.</p>
     *

     * @return null|ProductSearchFacetStatsValue
     */
    public function getStats();

    /**
     * @param ?ProductSearchFacetStatsValue $stats
     */
    public function setStats(?ProductSearchFacetStatsValue $stats): void;
}
