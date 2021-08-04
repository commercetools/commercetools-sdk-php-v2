<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Me\MyCartUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MyCartUpdateActionCollection<MyCartRemoveItemShippingAddressAction>
 * @method MyCartRemoveItemShippingAddressAction current()
 * @method MyCartRemoveItemShippingAddressAction end()
 * @method MyCartRemoveItemShippingAddressAction at($offset)
 */
class MyCartRemoveItemShippingAddressActionCollection extends MyCartUpdateActionCollection
{
    /**
     * @psalm-assert MyCartRemoveItemShippingAddressAction $value
     * @psalm-param MyCartRemoveItemShippingAddressAction|stdClass $value
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
        return function (?int $index): ?MyCartRemoveItemShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCartRemoveItemShippingAddressAction $data */
                $data = MyCartRemoveItemShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
