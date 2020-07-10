<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Common;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Address>
 * @method Address current()
 * @method Address at($offset)
 */
class AddressCollection extends MapperSequence
{
    /**
     * @psalm-assert Address $value
     * @psalm-param Address|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddressCollection
     */
    public function add($value)
    {
        if (!$value instanceof Address) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Address
     */
    protected function mapper()
    {
        return function (int $index): ?Address {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddressModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
