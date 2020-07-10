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
 * @extends MapperSequence<DateTimeSetField>
 * @method DateTimeSetField current()
 * @method DateTimeSetField at($offset)
 */
class DateTimeSetFieldCollection extends MapperSequence
{
    /**
     * @psalm-assert DateTimeSetField $value
     * @psalm-param DateTimeSetField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DateTimeSetFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof DateTimeSetField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DateTimeSetField
     */
    protected function mapper()
    {
        return function (int $index): ?DateTimeSetField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DateTimeSetFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
