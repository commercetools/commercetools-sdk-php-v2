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
 * @extends MapperSequence<TimeSetField>
 * @method TimeSetField current()
 * @method TimeSetField at($offset)
 */
class TimeSetFieldCollection extends MapperSequence
{
    /**
     * @psalm-assert TimeSetField $value
     * @psalm-param TimeSetField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TimeSetFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof TimeSetField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TimeSetField
     */
    protected function mapper()
    {
        return function (int $index): ?TimeSetField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TimeSetFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
