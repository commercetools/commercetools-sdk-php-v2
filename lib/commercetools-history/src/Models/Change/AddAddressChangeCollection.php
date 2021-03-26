<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AddAddressChange>
 * @method AddAddressChange current()
 * @method AddAddressChange at($offset)
 */
class AddAddressChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert AddAddressChange $value
     * @psalm-param AddAddressChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddAddressChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddAddressChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddAddressChange
     */
    protected function mapper()
    {
        return function (int $index): ?AddAddressChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddAddressChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
