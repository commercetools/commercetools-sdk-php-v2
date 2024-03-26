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
 * @extends SearchQueryExpressionCollection<SearchLongRangeExpression>
 * @method SearchLongRangeExpression current()
 * @method SearchLongRangeExpression end()
 * @method SearchLongRangeExpression at($offset)
 */
class SearchLongRangeExpressionCollection extends SearchQueryExpressionCollection
{
    /**
     * @psalm-assert SearchLongRangeExpression $value
     * @psalm-param SearchLongRangeExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchLongRangeExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchLongRangeExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchLongRangeExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchLongRangeExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchLongRangeExpression $data */
                $data = SearchLongRangeExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
