<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Product\FacetResultModel;

class RangeFacetResultModel extends FacetResultModel implements RangeFacetResult
{
    const DISCRIMINATOR_VALUE = 'range';

    /**
     * @var FacetResultRangeCollection
     */
    protected $ranges;

    /**
     * @return FacetResultRangeCollection
     */
    public function getRanges()
    {
        if (is_null($this->ranges)) {
            $value = $this->raw(RangeFacetResult::FIELD_RANGES);
            if (is_null($value)) {
                return $this->mapData(FacetResultRangeCollection::class, null);
            }
            $value = $this->mapData(FacetResultRangeCollection::class, $value);
            $this->ranges = $value;
        }
        return $this->ranges;
    }

    /**
     * @param FacetResultRangeCollection $ranges
     * @return $this
     */
    public function setRanges(FacetResultRangeCollection $ranges)
    {
        $this->ranges = $ranges;

        return $this;
    }

}
