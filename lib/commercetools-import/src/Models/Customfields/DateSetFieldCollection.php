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
 * @extends MapperSequence<DateSetField>
 * @method DateSetField current()
 * @method DateSetField at($offset)
 */
class DateSetFieldCollection extends MapperSequence
{
    /**
     * @psalm-assert DateSetField $value
     * @psalm-param DateSetField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DateSetFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof DateSetField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DateSetField
     */
    protected function mapper()
    {
        return function (int $index): ?DateSetField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DateSetFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
