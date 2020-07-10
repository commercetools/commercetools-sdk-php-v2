<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Productvariants;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DateTimeAttribute>
 * @method DateTimeAttribute current()
 * @method DateTimeAttribute at($offset)
 */
class DateTimeAttributeCollection extends MapperSequence
{
    /**
     * @psalm-assert DateTimeAttribute $value
     * @psalm-param DateTimeAttribute|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DateTimeAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof DateTimeAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DateTimeAttribute
     */
    protected function mapper()
    {
        return function (int $index): ?DateTimeAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DateTimeAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
