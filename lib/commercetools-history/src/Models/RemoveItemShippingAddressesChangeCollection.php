<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<RemoveItemShippingAddressesChange>
 * @method RemoveItemShippingAddressesChange current()
 * @method RemoveItemShippingAddressesChange at($offset)
 */
class RemoveItemShippingAddressesChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveItemShippingAddressesChange $value
     * @psalm-param RemoveItemShippingAddressesChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveItemShippingAddressesChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveItemShippingAddressesChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveItemShippingAddressesChange
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveItemShippingAddressesChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveItemShippingAddressesChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
