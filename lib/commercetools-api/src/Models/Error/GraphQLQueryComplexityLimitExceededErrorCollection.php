<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Error\GraphQLErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends GraphQLErrorObjectCollection<GraphQLQueryComplexityLimitExceededError>
 * @method GraphQLQueryComplexityLimitExceededError current()
 * @method GraphQLQueryComplexityLimitExceededError end()
 * @method GraphQLQueryComplexityLimitExceededError at($offset)
 */
class GraphQLQueryComplexityLimitExceededErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLQueryComplexityLimitExceededError $value
     * @psalm-param GraphQLQueryComplexityLimitExceededError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLQueryComplexityLimitExceededErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLQueryComplexityLimitExceededError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLQueryComplexityLimitExceededError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLQueryComplexityLimitExceededError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLQueryComplexityLimitExceededError $data */
                $data = GraphQLQueryComplexityLimitExceededErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
