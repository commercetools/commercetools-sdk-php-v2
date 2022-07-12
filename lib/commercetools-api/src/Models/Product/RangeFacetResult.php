<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface RangeFacetResult extends FacetResult
{
    public const FIELD_RANGES = 'ranges';

    /**

     * @return null|FacetRangeCollection
     */
    public function getRanges();

    /**
     * @param ?FacetRangeCollection $ranges
     */
    public function setRanges(?FacetRangeCollection $ranges): void;
}
