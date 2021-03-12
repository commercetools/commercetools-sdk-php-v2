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
 * @extends MapperSequence<AddItemShippingAddressesAction>
 * @method AddItemShippingAddressesAction current()
 * @method AddItemShippingAddressesAction at($offset)
 */
class AddItemShippingAddressesActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddItemShippingAddressesAction $value
     * @psalm-param AddItemShippingAddressesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddItemShippingAddressesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddItemShippingAddressesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddItemShippingAddressesAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddItemShippingAddressesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddItemShippingAddressesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
