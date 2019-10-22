<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DateTimeSetAttribute>
 *
 * @method DateTimeSetAttribute current()
 * @method DateTimeSetAttribute at($offset)
 */
class DateTimeSetAttributeCollection extends MapperSequence
{
    /**
     * @psalm-assert DateTimeSetAttribute $value
     * @psalm-param DateTimeSetAttribute|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return DateTimeSetAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof DateTimeSetAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DateTimeSetAttribute
     */
    protected function mapper()
    {
        return function (int $index): ?DateTimeSetAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DateTimeSetAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
