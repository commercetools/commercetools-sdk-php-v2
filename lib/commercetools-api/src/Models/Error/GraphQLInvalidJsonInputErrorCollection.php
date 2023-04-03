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
 * @extends GraphQLErrorObjectCollection<GraphQLInvalidJsonInputError>
 * @method GraphQLInvalidJsonInputError current()
 * @method GraphQLInvalidJsonInputError end()
 * @method GraphQLInvalidJsonInputError at($offset)
 */
class GraphQLInvalidJsonInputErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLInvalidJsonInputError $value
     * @psalm-param GraphQLInvalidJsonInputError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLInvalidJsonInputErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLInvalidJsonInputError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLInvalidJsonInputError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLInvalidJsonInputError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLInvalidJsonInputError $data */
                $data = GraphQLInvalidJsonInputErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
