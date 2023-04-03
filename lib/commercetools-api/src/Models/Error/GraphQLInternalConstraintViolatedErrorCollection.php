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
 * @extends GraphQLErrorObjectCollection<GraphQLInternalConstraintViolatedError>
 * @method GraphQLInternalConstraintViolatedError current()
 * @method GraphQLInternalConstraintViolatedError end()
 * @method GraphQLInternalConstraintViolatedError at($offset)
 */
class GraphQLInternalConstraintViolatedErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLInternalConstraintViolatedError $value
     * @psalm-param GraphQLInternalConstraintViolatedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLInternalConstraintViolatedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLInternalConstraintViolatedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLInternalConstraintViolatedError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLInternalConstraintViolatedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLInternalConstraintViolatedError $data */
                $data = GraphQLInternalConstraintViolatedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
