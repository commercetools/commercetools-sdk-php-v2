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
 * @extends SearchCompoundExpressionCollection<SearchAndExpression>
 * @method SearchAndExpression current()
 * @method SearchAndExpression end()
 * @method SearchAndExpression at($offset)
 */
class SearchAndExpressionCollection extends SearchCompoundExpressionCollection
{
    /**
     * @psalm-assert SearchAndExpression $value
     * @psalm-param SearchAndExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchAndExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchAndExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchAndExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchAndExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchAndExpression $data */
                $data = SearchAndExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
