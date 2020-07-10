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
 * @extends MapperSequence<LocalizedEnumField>
 * @method LocalizedEnumField current()
 * @method LocalizedEnumField at($offset)
 */
class LocalizedEnumFieldCollection extends MapperSequence
{
    /**
     * @psalm-assert LocalizedEnumField $value
     * @psalm-param LocalizedEnumField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return LocalizedEnumFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof LocalizedEnumField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LocalizedEnumField
     */
    protected function mapper()
    {
        return function (int $index): ?LocalizedEnumField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = LocalizedEnumFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
