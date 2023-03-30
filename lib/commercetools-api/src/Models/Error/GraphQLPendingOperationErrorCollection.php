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
 * @extends GraphQLErrorObjectCollection<GraphQLPendingOperationError>
 * @method GraphQLPendingOperationError current()
 * @method GraphQLPendingOperationError end()
 * @method GraphQLPendingOperationError at($offset)
 */
class GraphQLPendingOperationErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLPendingOperationError $value
     * @psalm-param GraphQLPendingOperationError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLPendingOperationErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLPendingOperationError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLPendingOperationError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLPendingOperationError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLPendingOperationError $data */
                $data = GraphQLPendingOperationErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
