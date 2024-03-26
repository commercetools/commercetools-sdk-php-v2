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
 * @extends SearchQueryExpressionCollection<SearchExactExpression>
 * @method SearchExactExpression current()
 * @method SearchExactExpression end()
 * @method SearchExactExpression at($offset)
 */
class SearchExactExpressionCollection extends SearchQueryExpressionCollection
{
    /**
     * @psalm-assert SearchExactExpression $value
     * @psalm-param SearchExactExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchExactExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchExactExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchExactExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchExactExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchExactExpression $data */
                $data = SearchExactExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
