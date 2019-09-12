<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AttributeDefinition>
 *
 * @method AttributeDefinition current()
 * @method AttributeDefinition at($offset)
 */
class AttributeDefinitionCollection extends MapperSequence
{
    /**
     * @psalm-assert AttributeDefinition $value
     * @psalm-param AttributeDefinition|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return AttributeDefinitionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeDefinition) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeDefinition
     */
    protected function mapper()
    {
        return function (int $index): ?AttributeDefinition {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AttributeDefinitionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
