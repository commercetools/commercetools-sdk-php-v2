<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ErrorObjectCollection<QueryComplexityLimitExceededError>
 * @method QueryComplexityLimitExceededError current()
 * @method QueryComplexityLimitExceededError at($offset)
 */
class QueryComplexityLimitExceededErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert QueryComplexityLimitExceededError $value
     * @psalm-param QueryComplexityLimitExceededError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QueryComplexityLimitExceededErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof QueryComplexityLimitExceededError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QueryComplexityLimitExceededError
     */
    protected function mapper()
    {
        return function (int $index): ?QueryComplexityLimitExceededError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QueryComplexityLimitExceededError $data */
                $data = QueryComplexityLimitExceededErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
