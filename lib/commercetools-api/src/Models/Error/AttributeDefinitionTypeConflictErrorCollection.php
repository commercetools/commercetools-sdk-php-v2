<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AttributeDefinitionTypeConflictError>
 * @method AttributeDefinitionTypeConflictError current()
 * @method AttributeDefinitionTypeConflictError at($offset)
 */
class AttributeDefinitionTypeConflictErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert AttributeDefinitionTypeConflictError $value
     * @psalm-param AttributeDefinitionTypeConflictError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeDefinitionTypeConflictErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeDefinitionTypeConflictError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeDefinitionTypeConflictError
     */
    protected function mapper()
    {
        return function (int $index): ?AttributeDefinitionTypeConflictError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AttributeDefinitionTypeConflictErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
