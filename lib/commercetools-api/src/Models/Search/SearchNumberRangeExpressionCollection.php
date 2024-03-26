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
 * @extends SearchQueryExpressionCollection<SearchNumberRangeExpression>
 * @method SearchNumberRangeExpression current()
 * @method SearchNumberRangeExpression end()
 * @method SearchNumberRangeExpression at($offset)
 */
class SearchNumberRangeExpressionCollection extends SearchQueryExpressionCollection
{
    /**
     * @psalm-assert SearchNumberRangeExpression $value
     * @psalm-param SearchNumberRangeExpression|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchNumberRangeExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchNumberRangeExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchNumberRangeExpression
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchNumberRangeExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchNumberRangeExpression $data */
                $data = SearchNumberRangeExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
