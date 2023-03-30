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
 * @extends GraphQLErrorObjectCollection<GraphQLEnumKeyDoesNotExistError>
 * @method GraphQLEnumKeyDoesNotExistError current()
 * @method GraphQLEnumKeyDoesNotExistError end()
 * @method GraphQLEnumKeyDoesNotExistError at($offset)
 */
class GraphQLEnumKeyDoesNotExistErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLEnumKeyDoesNotExistError $value
     * @psalm-param GraphQLEnumKeyDoesNotExistError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLEnumKeyDoesNotExistErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLEnumKeyDoesNotExistError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLEnumKeyDoesNotExistError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLEnumKeyDoesNotExistError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLEnumKeyDoesNotExistError $data */
                $data = GraphQLEnumKeyDoesNotExistErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
