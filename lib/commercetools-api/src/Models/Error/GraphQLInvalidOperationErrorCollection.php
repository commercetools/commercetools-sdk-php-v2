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
 * @extends GraphQLErrorObjectCollection<GraphQLInvalidOperationError>
 * @method GraphQLInvalidOperationError current()
 * @method GraphQLInvalidOperationError end()
 * @method GraphQLInvalidOperationError at($offset)
 */
class GraphQLInvalidOperationErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLInvalidOperationError $value
     * @psalm-param GraphQLInvalidOperationError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLInvalidOperationErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLInvalidOperationError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLInvalidOperationError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLInvalidOperationError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLInvalidOperationError $data */
                $data = GraphQLInvalidOperationErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
