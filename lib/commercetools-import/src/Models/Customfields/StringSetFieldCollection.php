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
 * @extends MapperSequence<StringSetField>
 * @method StringSetField current()
 * @method StringSetField at($offset)
 */
class StringSetFieldCollection extends MapperSequence
{
    /**
     * @psalm-assert StringSetField $value
     * @psalm-param StringSetField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StringSetFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof StringSetField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StringSetField
     */
    protected function mapper()
    {
        return function (int $index): ?StringSetField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StringSetFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
