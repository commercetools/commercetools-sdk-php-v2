<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchFacetRangesExpression extends ProductSearchFacetExpression
{
    public const FIELD_RANGES = 'ranges';

    /**
     * <p>Definition of the ranges facet.</p>
     *

     * @return null|ProductSearchFacetRangesValue
     */
    public function getRanges();

    /**
     * @param ?ProductSearchFacetRangesValue $ranges
     */
    public function setRanges(?ProductSearchFacetRangesValue $ranges): void;
}
