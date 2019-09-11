<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MyCartRemoveItemShippingAddressAction>
 *
 * @method MyCartRemoveItemShippingAddressAction current()
 * @method MyCartRemoveItemShippingAddressAction at($offset)
 */
class MyCartRemoveItemShippingAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCartRemoveItemShippingAddressAction $value
     * @psalm-param MyCartRemoveItemShippingAddressAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyCartRemoveItemShippingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartRemoveItemShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartRemoveItemShippingAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCartRemoveItemShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCartRemoveItemShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
