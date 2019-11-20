<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;

/**
 * @implements Builder<RangeFacetResult>
 */
final class RangeFacetResultBuilder implements Builder
{
    /**
     * @var ?FacetResultRangeCollection
     */
    private $ranges;

    /**
     * @return null|FacetResultRangeCollection
     */
    public function getRanges()
    {
        return $this->ranges;
    }

    /**
     * @return $this
     */
    public function withRanges(?FacetResultRangeCollection $ranges)
    {
        $this->ranges = $ranges;

        return $this;
    }

    public function build(): RangeFacetResult
    {
        return new RangeFacetResultModel(
            $this->ranges
        );
    }

    public static function of(): RangeFacetResultBuilder
    {
        return new self();
    }
}
