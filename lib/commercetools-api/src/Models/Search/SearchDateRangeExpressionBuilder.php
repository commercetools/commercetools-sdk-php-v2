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
 * @implements Builder<SearchDateRangeExpression>
 */
final class SearchDateRangeExpressionBuilder implements Builder
{
    /**

     * @var null|SearchDateRangeValue|SearchDateRangeValueBuilder
     */
    private $range;

    /**

     * @return null|SearchDateRangeValue
     */
    public function getRange()
    {
        return $this->range instanceof SearchDateRangeValueBuilder ? $this->range->build() : $this->range;
    }

    /**
     * @param ?SearchDateRangeValue $range
     * @return $this
     */
    public function withRange(?SearchDateRangeValue $range)
    {
        $this->range = $range;

        return $this;
    }

    /**
     * @deprecated use withRange() instead
     * @return $this
     */
    public function withRangeBuilder(?SearchDateRangeValueBuilder $range)
    {
        $this->range = $range;

        return $this;
    }

    public function build(): SearchDateRangeExpression
    {
        return new SearchDateRangeExpressionModel(
            $this->range instanceof SearchDateRangeValueBuilder ? $this->range->build() : $this->range
        );
    }

    public static function of(): SearchDateRangeExpressionBuilder
    {
        return new self();
    }
}
