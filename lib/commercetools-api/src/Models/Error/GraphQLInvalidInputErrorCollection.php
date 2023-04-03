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
 * @extends GraphQLErrorObjectCollection<GraphQLInvalidInputError>
 * @method GraphQLInvalidInputError current()
 * @method GraphQLInvalidInputError end()
 * @method GraphQLInvalidInputError at($offset)
 */
class GraphQLInvalidInputErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLInvalidInputError $value
     * @psalm-param GraphQLInvalidInputError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLInvalidInputErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLInvalidInputError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLInvalidInputError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLInvalidInputError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLInvalidInputError $data */
                $data = GraphQLInvalidInputErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
