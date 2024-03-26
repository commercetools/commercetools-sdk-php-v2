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
 * @extends SearchQueryExpressionCollection<SearchExistsExpression>
 * @method SearchExistsExpression current()
 * @method SearchExistsExpression end()
 * @method SearchExistsExpression at($offset)
 */
class SearchExistsExpressionCollection extends SearchQueryExpressionCollection
{
    /**
     * @psalm-assert SearchExistsExpression $value
     * @psalm-param SearchExistsExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchExistsExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchExistsExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchExistsExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchExistsExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchExistsExpression $data */
                $data = SearchExistsExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
