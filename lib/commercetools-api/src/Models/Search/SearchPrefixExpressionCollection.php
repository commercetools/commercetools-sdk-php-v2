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
 * @extends SearchQueryExpressionCollection<SearchPrefixExpression>
 * @method SearchPrefixExpression current()
 * @method SearchPrefixExpression end()
 * @method SearchPrefixExpression at($offset)
 */
class SearchPrefixExpressionCollection extends SearchQueryExpressionCollection
{
    /**
     * @psalm-assert SearchPrefixExpression $value
     * @psalm-param SearchPrefixExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchPrefixExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchPrefixExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchPrefixExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchPrefixExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchPrefixExpression $data */
                $data = SearchPrefixExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
