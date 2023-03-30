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
 * @extends GraphQLErrorObjectCollection<GraphQLAttributeDefinitionTypeConflictError>
 * @method GraphQLAttributeDefinitionTypeConflictError current()
 * @method GraphQLAttributeDefinitionTypeConflictError end()
 * @method GraphQLAttributeDefinitionTypeConflictError at($offset)
 */
class GraphQLAttributeDefinitionTypeConflictErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLAttributeDefinitionTypeConflictError $value
     * @psalm-param GraphQLAttributeDefinitionTypeConflictError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLAttributeDefinitionTypeConflictErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLAttributeDefinitionTypeConflictError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLAttributeDefinitionTypeConflictError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLAttributeDefinitionTypeConflictError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLAttributeDefinitionTypeConflictError $data */
                $data = GraphQLAttributeDefinitionTypeConflictErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
