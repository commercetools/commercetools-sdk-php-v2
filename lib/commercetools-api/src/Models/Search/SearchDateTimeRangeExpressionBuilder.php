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
 * @implements Builder<SearchDateTimeRangeExpression>
 */
final class SearchDateTimeRangeExpressionBuilder implements Builder
{
    /**

     * @var null|SearchDateTimeRangeValue|SearchDateTimeRangeValueBuilder
     */
    private $range;

    /**

     * @return null|SearchDateTimeRangeValue
     */
    public function getRange()
    {
        return $this->range instanceof SearchDateTimeRangeValueBuilder ? $this->range->build() : $this->range;
    }

    /**
     * @param ?SearchDateTimeRangeValue $range
     * @return $this
     */
    public function withRange(?SearchDateTimeRangeValue $range)
    {
        $this->range = $range;

        return $this;
    }

    /**
     * @deprecated use withRange() instead
     * @return $this
     */
    public function withRangeBuilder(?SearchDateTimeRangeValueBuilder $range)
    {
        $this->range = $range;

        return $this;
    }

    public function build(): SearchDateTimeRangeExpression
    {
        return new SearchDateTimeRangeExpressionModel(
            $this->range instanceof SearchDateTimeRangeValueBuilder ? $this->range->build() : $this->range
        );
    }

    public static function of(): SearchDateTimeRangeExpressionBuilder
    {
        return new self();
    }
}
