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
 * @extends GraphQLErrorObjectCollection<GraphQLEnumKeyAlreadyExistsError>
 * @method GraphQLEnumKeyAlreadyExistsError current()
 * @method GraphQLEnumKeyAlreadyExistsError end()
 * @method GraphQLEnumKeyAlreadyExistsError at($offset)
 */
class GraphQLEnumKeyAlreadyExistsErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLEnumKeyAlreadyExistsError $value
     * @psalm-param GraphQLEnumKeyAlreadyExistsError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLEnumKeyAlreadyExistsErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLEnumKeyAlreadyExistsError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLEnumKeyAlreadyExistsError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLEnumKeyAlreadyExistsError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLEnumKeyAlreadyExistsError $data */
                $data = GraphQLEnumKeyAlreadyExistsErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
