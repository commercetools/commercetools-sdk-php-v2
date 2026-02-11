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
 * @extends GraphQLErrorObjectCollection<GraphQLExactLockConflictError>
 * @method GraphQLExactLockConflictError current()
 * @method GraphQLExactLockConflictError end()
 * @method GraphQLExactLockConflictError at($offset)
 */
class GraphQLExactLockConflictErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLExactLockConflictError $value
     * @psalm-param GraphQLExactLockConflictError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLExactLockConflictErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLExactLockConflictError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLExactLockConflictError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLExactLockConflictError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLExactLockConflictError $data */
                $data = GraphQLExactLockConflictErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
