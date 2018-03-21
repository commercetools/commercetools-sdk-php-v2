<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

interface RangeFacetResult extends FacetResult {
    const FIELD_RANGES = 'ranges';

    /**
     * @return FacetResultRangeCollection
     */
    public function getRanges();

    /**
     * @param FacetResultRangeCollection $ranges
     * @return $this
     */
    public function setRanges(FacetResultRangeCollection $ranges);

}
