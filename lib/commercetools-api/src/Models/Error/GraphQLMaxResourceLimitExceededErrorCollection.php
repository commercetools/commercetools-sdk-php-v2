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
 * @extends GraphQLErrorObjectCollection<GraphQLMaxResourceLimitExceededError>
 * @method GraphQLMaxResourceLimitExceededError current()
 * @method GraphQLMaxResourceLimitExceededError end()
 * @method GraphQLMaxResourceLimitExceededError at($offset)
 */
class GraphQLMaxResourceLimitExceededErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLMaxResourceLimitExceededError $value
     * @psalm-param GraphQLMaxResourceLimitExceededError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLMaxResourceLimitExceededErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLMaxResourceLimitExceededError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLMaxResourceLimitExceededError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLMaxResourceLimitExceededError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLMaxResourceLimitExceededError $data */
                $data = GraphQLMaxResourceLimitExceededErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
