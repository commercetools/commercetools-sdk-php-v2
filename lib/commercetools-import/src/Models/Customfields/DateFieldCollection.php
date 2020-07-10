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
 * @extends MapperSequence<DateField>
 * @method DateField current()
 * @method DateField at($offset)
 */
class DateFieldCollection extends MapperSequence
{
    /**
     * @psalm-assert DateField $value
     * @psalm-param DateField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DateFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof DateField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DateField
     */
    protected function mapper()
    {
        return function (int $index): ?DateField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DateFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
