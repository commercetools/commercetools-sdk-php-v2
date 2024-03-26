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
 * @extends SearchCompoundExpressionCollection<SearchOrExpression>
 * @method SearchOrExpression current()
 * @method SearchOrExpression end()
 * @method SearchOrExpression at($offset)
 */
class SearchOrExpressionCollection extends SearchCompoundExpressionCollection
{
    /**
     * @psalm-assert SearchOrExpression $value
     * @psalm-param SearchOrExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchOrExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchOrExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchOrExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchOrExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchOrExpression $data */
                $data = SearchOrExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
