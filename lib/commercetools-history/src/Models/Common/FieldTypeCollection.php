<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<FieldType>
 * @method FieldType current()
 * @method FieldType end()
 * @method FieldType at($offset)
 */
class FieldTypeCollection extends MapperSequence
{
    /**
     * @psalm-assert FieldType $value
     * @psalm-param FieldType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return FieldTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof FieldType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?FieldType
     */
    protected function mapper()
    {
        return function (?int $index): ?FieldType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var FieldType $data */
                $data = FieldTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
