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
 * @extends SearchQueryExpressionCollection<SearchDateRangeExpression>
 * @method SearchDateRangeExpression current()
 * @method SearchDateRangeExpression end()
 * @method SearchDateRangeExpression at($offset)
 */
class SearchDateRangeExpressionCollection extends SearchQueryExpressionCollection
{
    /**
     * @psalm-assert SearchDateRangeExpression $value
     * @psalm-param SearchDateRangeExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchDateRangeExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchDateRangeExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchDateRangeExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchDateRangeExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchDateRangeExpression $data */
                $data = SearchDateRangeExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
