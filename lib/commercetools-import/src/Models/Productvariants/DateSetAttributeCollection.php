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
 * @extends MapperSequence<DateSetAttribute>
 * @method DateSetAttribute current()
 * @method DateSetAttribute at($offset)
 */
class DateSetAttributeCollection extends MapperSequence
{
    /**
     * @psalm-assert DateSetAttribute $value
     * @psalm-param DateSetAttribute|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DateSetAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof DateSetAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DateSetAttribute
     */
    protected function mapper()
    {
        return function (int $index): ?DateSetAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DateSetAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
