<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<FieldDefinition>
 * @method FieldDefinition current()
 * @method FieldDefinition at($offset)
 */
class FieldDefinitionCollection extends MapperSequence
{
    /**
     * @psalm-assert FieldDefinition $value
     * @psalm-param FieldDefinition|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return FieldDefinitionCollection
     */
    public function add($value)
    {
        if (!$value instanceof FieldDefinition) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?FieldDefinition
     */
    protected function mapper()
    {
        return function (int $index): ?FieldDefinition {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var FieldDefinition $data */
                $data = FieldDefinitionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
