<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SearchLongRangeExpression>
 */
final class SearchLongRangeExpressionBuilder implements Builder
{
    /**

     * @var null|SearchLongRangeValue|SearchLongRangeValueBuilder
     */
    private $range;

    /**

     * @return null|SearchLongRangeValue
     */
    public function getRange()
    {
        return $this->range instanceof SearchLongRangeValueBuilder ? $this->range->build() : $this->range;
    }

    /**
     * @param ?SearchLongRangeValue $range
     * @return $this
     */
    public function withRange(?SearchLongRangeValue $range)
    {
        $this->range = $range;

        return $this;
    }

    /**
     * @deprecated use withRange() instead
     * @return $this
     */
    public function withRangeBuilder(?SearchLongRangeValueBuilder $range)
    {
        $this->range = $range;

        return $this;
    }

    public function build(): SearchLongRangeExpression
    {
        return new SearchLongRangeExpressionModel(
            $this->range instanceof SearchLongRangeValueBuilder ? $this->range->build() : $this->range
        );
    }

    public static function of(): SearchLongRangeExpressionBuilder
    {
        return new self();
    }
}
