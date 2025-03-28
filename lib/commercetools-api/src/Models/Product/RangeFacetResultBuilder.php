<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RangeFacetResult>
 */
final class RangeFacetResultBuilder implements Builder
{
    /**

     * @var ?FacetRangeCollection
     */
    private $ranges;

    /**
     * <p>Statistical data over values for <code>date</code>, <code>time</code>, <code>datetime</code>, <code>number</code>, and <code>money</code> type fields.</p>
     *

     * @return null|FacetRangeCollection
     */
    public function getRanges()
    {
        return $this->ranges;
    }

    /**
     * @param ?FacetRangeCollection $ranges
     * @return $this
     */
    public function withRanges(?FacetRangeCollection $ranges)
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
