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
 * @extends GraphQLErrorObjectCollection<GraphQLInvalidTokenError>
 * @method GraphQLInvalidTokenError current()
 * @method GraphQLInvalidTokenError end()
 * @method GraphQLInvalidTokenError at($offset)
 */
class GraphQLInvalidTokenErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLInvalidTokenError $value
     * @psalm-param GraphQLInvalidTokenError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLInvalidTokenErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLInvalidTokenError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLInvalidTokenError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLInvalidTokenError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLInvalidTokenError $data */
                $data = GraphQLInvalidTokenErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
