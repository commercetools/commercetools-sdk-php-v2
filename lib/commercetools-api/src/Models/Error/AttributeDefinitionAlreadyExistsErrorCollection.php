<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ErrorObjectCollection<AttributeDefinitionAlreadyExistsError>
 * @method AttributeDefinitionAlreadyExistsError current()
 * @method AttributeDefinitionAlreadyExistsError at($offset)
 */
class AttributeDefinitionAlreadyExistsErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert AttributeDefinitionAlreadyExistsError $value
     * @psalm-param AttributeDefinitionAlreadyExistsError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeDefinitionAlreadyExistsErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeDefinitionAlreadyExistsError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeDefinitionAlreadyExistsError
     */
    protected function mapper()
    {
        return function (?int $index): ?AttributeDefinitionAlreadyExistsError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeDefinitionAlreadyExistsError $data */
                $data = AttributeDefinitionAlreadyExistsErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
