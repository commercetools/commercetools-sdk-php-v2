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
 * @implements Builder<SearchTimeRangeExpression>
 */
final class SearchTimeRangeExpressionBuilder implements Builder
{
    /**

     * @var null|SearchTimeRangeValue|SearchTimeRangeValueBuilder
     */
    private $range;

    /**

     * @return null|SearchTimeRangeValue
     */
    public function getRange()
    {
        return $this->range instanceof SearchTimeRangeValueBuilder ? $this->range->build() : $this->range;
    }

    /**
     * @param ?SearchTimeRangeValue $range
     * @return $this
     */
    public function withRange(?SearchTimeRangeValue $range)
    {
        $this->range = $range;

        return $this;
    }

    /**
     * @deprecated use withRange() instead
     * @return $this
     */
    public function withRangeBuilder(?SearchTimeRangeValueBuilder $range)
    {
        $this->range = $range;

        return $this;
    }

    public function build(): SearchTimeRangeExpression
    {
        return new SearchTimeRangeExpressionModel(
            $this->range instanceof SearchTimeRangeValueBuilder ? $this->range->build() : $this->range
        );
    }

    public static function of(): SearchTimeRangeExpressionBuilder
    {
        return new self();
    }
}
