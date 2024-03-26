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
 * @template T of SearchCompoundExpression
 * @extends SearchQueryCollection<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method SearchCompoundExpression current()
 * @method SearchCompoundExpression end()
 * @method SearchCompoundExpression at($offset)
 */
class SearchCompoundExpressionCollection extends SearchQueryCollection
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchCompoundExpressionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchCompoundExpression) {
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
        return function (?int $index): ?SearchCompoundExpression {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = SearchCompoundExpressionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
