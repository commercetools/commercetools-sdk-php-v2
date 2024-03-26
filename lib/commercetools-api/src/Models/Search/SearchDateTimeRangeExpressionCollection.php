<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Api\Models\Search\SearchQueryExpressionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends SearchQueryExpressionCollection<SearchDateTimeRangeExpression>
 * @method SearchDateTimeRangeExpression current()
 * @method SearchDateTimeRangeExpression end()
 * @method SearchDateTimeRangeExpression at($offset)
 */
class SearchDateTimeRangeExpressionCollection extends SearchQueryExpressionCollection
{
    /**
     * @psalm-assert SearchDateTimeRangeExpression $value
     * @psalm-param SearchDateTimeRangeExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchDateTimeRangeExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchDateTimeRangeExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchDateTimeRangeExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchDateTimeRangeExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchDateTimeRangeExpression $data */
                $data = SearchDateTimeRangeExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
