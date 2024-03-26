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
 * @extends SearchQueryExpressionCollection<SearchFullTextExpression>
 * @method SearchFullTextExpression current()
 * @method SearchFullTextExpression end()
 * @method SearchFullTextExpression at($offset)
 */
class SearchFullTextExpressionCollection extends SearchQueryExpressionCollection
{
    /**
     * @psalm-assert SearchFullTextExpression $value
     * @psalm-param SearchFullTextExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchFullTextExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchFullTextExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchFullTextExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchFullTextExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchFullTextExpression $data */
                $data = SearchFullTextExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
