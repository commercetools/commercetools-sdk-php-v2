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
 * @extends GraphQLErrorObjectCollection<GraphQLAttributeNameDoesNotExistError>
 * @method GraphQLAttributeNameDoesNotExistError current()
 * @method GraphQLAttributeNameDoesNotExistError end()
 * @method GraphQLAttributeNameDoesNotExistError at($offset)
 */
class GraphQLAttributeNameDoesNotExistErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLAttributeNameDoesNotExistError $value
     * @psalm-param GraphQLAttributeNameDoesNotExistError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLAttributeNameDoesNotExistErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLAttributeNameDoesNotExistError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLAttributeNameDoesNotExistError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLAttributeNameDoesNotExistError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLAttributeNameDoesNotExistError $data */
                $data = GraphQLAttributeNameDoesNotExistErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
