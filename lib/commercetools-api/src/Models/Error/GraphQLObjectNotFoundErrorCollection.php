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
 * @extends GraphQLErrorObjectCollection<GraphQLObjectNotFoundError>
 * @method GraphQLObjectNotFoundError current()
 * @method GraphQLObjectNotFoundError end()
 * @method GraphQLObjectNotFoundError at($offset)
 */
class GraphQLObjectNotFoundErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLObjectNotFoundError $value
     * @psalm-param GraphQLObjectNotFoundError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLObjectNotFoundErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLObjectNotFoundError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLObjectNotFoundError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLObjectNotFoundError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLObjectNotFoundError $data */
                $data = GraphQLObjectNotFoundErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
