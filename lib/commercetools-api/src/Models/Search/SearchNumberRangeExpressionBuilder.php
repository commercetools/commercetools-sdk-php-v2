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
 * @implements Builder<SearchNumberRangeExpression>
 */
final class SearchNumberRangeExpressionBuilder implements Builder
{
    /**

     * @var null|SearchNumberRangeValue|SearchNumberRangeValueBuilder
     */
    private $range;

    /**

     * @return null|SearchNumberRangeValue
     */
    public function getRange()
    {
        return $this->range instanceof SearchNumberRangeValueBuilder ? $this->range->build() : $this->range;
    }

    /**
     * @param ?SearchNumberRangeValue $range
     * @return $this
     */
    public function withRange(?SearchNumberRangeValue $range)
    {
        $this->range = $range;

        return $this;
    }

    /**
     * @deprecated use withRange() instead
     * @return $this
     */
    public function withRangeBuilder(?SearchNumberRangeValueBuilder $range)
    {
        $this->range = $range;

        return $this;
    }

    public function build(): SearchNumberRangeExpression
    {
        return new SearchNumberRangeExpressionModel(
            $this->range instanceof SearchNumberRangeValueBuilder ? $this->range->build() : $this->range
        );
    }

    public static function of(): SearchNumberRangeExpressionBuilder
    {
        return new self();
    }
}
