<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\GraphQL;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<GraphQLError>
 *
 * @method GraphQLError current()
 * @method GraphQLError at($offset)
 */
class GraphQLErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert GraphQLError $value
     * @psalm-param GraphQLError|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return GraphQLErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLError
     */
    protected function mapper()
    {
        return function (int $index): ?GraphQLError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = GraphQLErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
