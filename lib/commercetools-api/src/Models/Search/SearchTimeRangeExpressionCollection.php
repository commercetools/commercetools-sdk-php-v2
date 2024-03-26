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
 * @extends SearchQueryExpressionCollection<SearchTimeRangeExpression>
 * @method SearchTimeRangeExpression current()
 * @method SearchTimeRangeExpression end()
 * @method SearchTimeRangeExpression at($offset)
 */
class SearchTimeRangeExpressionCollection extends SearchQueryExpressionCollection
{
    /**
     * @psalm-assert SearchTimeRangeExpression $value
     * @psalm-param SearchTimeRangeExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchTimeRangeExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchTimeRangeExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchTimeRangeExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchTimeRangeExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchTimeRangeExpression $data */
                $data = SearchTimeRangeExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
