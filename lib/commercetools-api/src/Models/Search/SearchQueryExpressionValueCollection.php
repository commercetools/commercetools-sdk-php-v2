<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of SearchQueryExpressionValue
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method SearchQueryExpressionValue current()
 * @method SearchQueryExpressionValue end()
 * @method SearchQueryExpressionValue at($offset)
 */
class SearchQueryExpressionValueCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchQueryExpressionValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchQueryExpressionValue) {
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
        return function (?int $index): ?SearchQueryExpressionValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = SearchQueryExpressionValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
