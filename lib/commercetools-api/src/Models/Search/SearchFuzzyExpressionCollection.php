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
 * @extends SearchQueryExpressionCollection<SearchFuzzyExpression>
 * @method SearchFuzzyExpression current()
 * @method SearchFuzzyExpression end()
 * @method SearchFuzzyExpression at($offset)
 */
class SearchFuzzyExpressionCollection extends SearchQueryExpressionCollection
{
    /**
     * @psalm-assert SearchFuzzyExpression $value
     * @psalm-param SearchFuzzyExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchFuzzyExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchFuzzyExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchFuzzyExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchFuzzyExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchFuzzyExpression $data */
                $data = SearchFuzzyExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
