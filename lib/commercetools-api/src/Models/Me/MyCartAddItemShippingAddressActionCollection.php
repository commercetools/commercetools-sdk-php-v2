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
 * @extends MyCartUpdateActionCollection<MyCartAddItemShippingAddressAction>
 * @method MyCartAddItemShippingAddressAction current()
 * @method MyCartAddItemShippingAddressAction end()
 * @method MyCartAddItemShippingAddressAction at($offset)
 */
class MyCartAddItemShippingAddressActionCollection extends MyCartUpdateActionCollection
{
    /**
     * @psalm-assert MyCartAddItemShippingAddressAction $value
     * @psalm-param MyCartAddItemShippingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartAddItemShippingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartAddItemShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartAddItemShippingAddressAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCartAddItemShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCartAddItemShippingAddressAction $data */
                $data = MyCartAddItemShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
