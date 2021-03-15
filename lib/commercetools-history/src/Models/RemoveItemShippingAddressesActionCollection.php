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
 * @extends MapperSequence<RemoveItemShippingAddressesAction>
 * @method RemoveItemShippingAddressesAction current()
 * @method RemoveItemShippingAddressesAction at($offset)
 */
class RemoveItemShippingAddressesActionCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveItemShippingAddressesAction $value
     * @psalm-param RemoveItemShippingAddressesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveItemShippingAddressesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveItemShippingAddressesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveItemShippingAddressesAction
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveItemShippingAddressesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveItemShippingAddressesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
