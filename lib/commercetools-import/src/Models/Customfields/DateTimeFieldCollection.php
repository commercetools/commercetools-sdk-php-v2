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
 * @extends MapperSequence<DateTimeField>
 * @method DateTimeField current()
 * @method DateTimeField at($offset)
 */
class DateTimeFieldCollection extends MapperSequence
{
    /**
     * @psalm-assert DateTimeField $value
     * @psalm-param DateTimeField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DateTimeFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof DateTimeField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DateTimeField
     */
    protected function mapper()
    {
        return function (int $index): ?DateTimeField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DateTimeFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
