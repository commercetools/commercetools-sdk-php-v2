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
 * @extends GraphQLErrorObjectCollection<GraphQLUnauthorizedError>
 * @method GraphQLUnauthorizedError current()
 * @method GraphQLUnauthorizedError end()
 * @method GraphQLUnauthorizedError at($offset)
 */
class GraphQLUnauthorizedErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLUnauthorizedError $value
     * @psalm-param GraphQLUnauthorizedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLUnauthorizedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLUnauthorizedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLUnauthorizedError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLUnauthorizedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLUnauthorizedError $data */
                $data = GraphQLUnauthorizedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
