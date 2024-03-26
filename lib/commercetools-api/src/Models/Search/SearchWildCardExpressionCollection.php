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
 * @extends SearchQueryExpressionCollection<SearchWildCardExpression>
 * @method SearchWildCardExpression current()
 * @method SearchWildCardExpression end()
 * @method SearchWildCardExpression at($offset)
 */
class SearchWildCardExpressionCollection extends SearchQueryExpressionCollection
{
    /**
     * @psalm-assert SearchWildCardExpression $value
     * @psalm-param SearchWildCardExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchWildCardExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchWildCardExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchWildCardExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchWildCardExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchWildCardExpression $data */
                $data = SearchWildCardExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
