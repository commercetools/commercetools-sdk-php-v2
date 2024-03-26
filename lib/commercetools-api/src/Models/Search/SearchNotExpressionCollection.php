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
 * @extends SearchCompoundExpressionCollection<SearchNotExpression>
 * @method SearchNotExpression current()
 * @method SearchNotExpression end()
 * @method SearchNotExpression at($offset)
 */
class SearchNotExpressionCollection extends SearchCompoundExpressionCollection
{
    /**
     * @psalm-assert SearchNotExpression $value
     * @psalm-param SearchNotExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchNotExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchNotExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchNotExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchNotExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchNotExpression $data */
                $data = SearchNotExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
