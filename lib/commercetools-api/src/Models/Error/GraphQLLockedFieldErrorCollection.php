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
 * @extends GraphQLErrorObjectCollection<GraphQLLockedFieldError>
 * @method GraphQLLockedFieldError current()
 * @method GraphQLLockedFieldError end()
 * @method GraphQLLockedFieldError at($offset)
 */
class GraphQLLockedFieldErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLLockedFieldError $value
     * @psalm-param GraphQLLockedFieldError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLLockedFieldErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLLockedFieldError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLLockedFieldError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLLockedFieldError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLLockedFieldError $data */
                $data = GraphQLLockedFieldErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
