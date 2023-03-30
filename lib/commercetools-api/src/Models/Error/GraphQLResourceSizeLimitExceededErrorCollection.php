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
 * @extends GraphQLErrorObjectCollection<GraphQLResourceSizeLimitExceededError>
 * @method GraphQLResourceSizeLimitExceededError current()
 * @method GraphQLResourceSizeLimitExceededError end()
 * @method GraphQLResourceSizeLimitExceededError at($offset)
 */
class GraphQLResourceSizeLimitExceededErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLResourceSizeLimitExceededError $value
     * @psalm-param GraphQLResourceSizeLimitExceededError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLResourceSizeLimitExceededErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLResourceSizeLimitExceededError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLResourceSizeLimitExceededError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLResourceSizeLimitExceededError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLResourceSizeLimitExceededError $data */
                $data = GraphQLResourceSizeLimitExceededErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
