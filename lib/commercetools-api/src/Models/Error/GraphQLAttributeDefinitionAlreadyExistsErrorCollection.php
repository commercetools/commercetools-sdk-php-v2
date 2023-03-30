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
 * @extends GraphQLErrorObjectCollection<GraphQLAttributeDefinitionAlreadyExistsError>
 * @method GraphQLAttributeDefinitionAlreadyExistsError current()
 * @method GraphQLAttributeDefinitionAlreadyExistsError end()
 * @method GraphQLAttributeDefinitionAlreadyExistsError at($offset)
 */
class GraphQLAttributeDefinitionAlreadyExistsErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLAttributeDefinitionAlreadyExistsError $value
     * @psalm-param GraphQLAttributeDefinitionAlreadyExistsError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLAttributeDefinitionAlreadyExistsErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLAttributeDefinitionAlreadyExistsError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLAttributeDefinitionAlreadyExistsError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLAttributeDefinitionAlreadyExistsError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLAttributeDefinitionAlreadyExistsError $data */
                $data = GraphQLAttributeDefinitionAlreadyExistsErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
