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
 * @extends MapperSequence<TimeField>
 * @method TimeField current()
 * @method TimeField at($offset)
 */
class TimeFieldCollection extends MapperSequence
{
    /**
     * @psalm-assert TimeField $value
     * @psalm-param TimeField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TimeFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof TimeField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TimeField
     */
    protected function mapper()
    {
        return function (int $index): ?TimeField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TimeFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
