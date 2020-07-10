<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Customfields;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<EnumSetField>
 * @method EnumSetField current()
 * @method EnumSetField at($offset)
 */
class EnumSetFieldCollection extends MapperSequence
{
    /**
     * @psalm-assert EnumSetField $value
     * @psalm-param EnumSetField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return EnumSetFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof EnumSetField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?EnumSetField
     */
    protected function mapper()
    {
        return function (int $index): ?EnumSetField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = EnumSetFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
