<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Api\Models\Search\SearchQueryCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of SearchQueryExpression
 * @extends SearchQueryCollection<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method SearchQueryExpression current()
 * @method SearchQueryExpression end()
 * @method SearchQueryExpression at($offset)
 */
class SearchQueryExpressionCollection extends SearchQueryCollection
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchQueryExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchQueryExpression) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?SearchQueryExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = SearchQueryExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
