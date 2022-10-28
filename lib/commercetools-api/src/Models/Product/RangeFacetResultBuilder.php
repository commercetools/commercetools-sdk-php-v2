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
