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
 * @extends SearchQueryExpressionCollection<SearchFullTextPrefixExpression>
 * @method SearchFullTextPrefixExpression current()
 * @method SearchFullTextPrefixExpression end()
 * @method SearchFullTextPrefixExpression at($offset)
 */
class SearchFullTextPrefixExpressionCollection extends SearchQueryExpressionCollection
{
    /**
     * @psalm-assert SearchFullTextPrefixExpression $value
     * @psalm-param SearchFullTextPrefixExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchFullTextPrefixExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchFullTextPrefixExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchFullTextPrefixExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchFullTextPrefixExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchFullTextPrefixExpression $data */
                $data = SearchFullTextPrefixExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
