<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Api\Models\Search\SearchCompoundExpressionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends SearchCompoundExpressionCollection<SearchFilterExpression>
 * @method SearchFilterExpression current()
 * @method SearchFilterExpression end()
 * @method SearchFilterExpression at($offset)
 */
class SearchFilterExpressionCollection extends SearchCompoundExpressionCollection
{
    /**
     * @psalm-assert SearchFilterExpression $value
     * @psalm-param SearchFilterExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchFilterExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchFilterExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchFilterExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchFilterExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchFilterExpression $data */
                $data = SearchFilterExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
