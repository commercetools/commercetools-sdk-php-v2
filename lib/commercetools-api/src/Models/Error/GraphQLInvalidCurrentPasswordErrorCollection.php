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
 * @extends GraphQLErrorObjectCollection<GraphQLInvalidCurrentPasswordError>
 * @method GraphQLInvalidCurrentPasswordError current()
 * @method GraphQLInvalidCurrentPasswordError end()
 * @method GraphQLInvalidCurrentPasswordError at($offset)
 */
class GraphQLInvalidCurrentPasswordErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLInvalidCurrentPasswordError $value
     * @psalm-param GraphQLInvalidCurrentPasswordError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLInvalidCurrentPasswordErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLInvalidCurrentPasswordError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLInvalidCurrentPasswordError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLInvalidCurrentPasswordError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLInvalidCurrentPasswordError $data */
                $data = GraphQLInvalidCurrentPasswordErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
