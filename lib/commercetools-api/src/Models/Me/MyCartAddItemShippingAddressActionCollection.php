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
 * @extends MapperSequence<MyCartAddItemShippingAddressAction>
 * @method MyCartAddItemShippingAddressAction current()
 * @method MyCartAddItemShippingAddressAction at($offset)
 */
class MyCartAddItemShippingAddressActionCollection extends MapperSequence
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
        return function (int $index): ?MyCartAddItemShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCartAddItemShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
