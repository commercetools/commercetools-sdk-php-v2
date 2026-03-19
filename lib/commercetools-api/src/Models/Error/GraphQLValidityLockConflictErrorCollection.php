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
 * @extends GraphQLErrorObjectCollection<GraphQLValidityLockConflictError>
 * @method GraphQLValidityLockConflictError current()
 * @method GraphQLValidityLockConflictError end()
 * @method GraphQLValidityLockConflictError at($offset)
 */
class GraphQLValidityLockConflictErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLValidityLockConflictError $value
     * @psalm-param GraphQLValidityLockConflictError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLValidityLockConflictErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLValidityLockConflictError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLValidityLockConflictError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLValidityLockConflictError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLValidityLockConflictError $data */
                $data = GraphQLValidityLockConflictErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
