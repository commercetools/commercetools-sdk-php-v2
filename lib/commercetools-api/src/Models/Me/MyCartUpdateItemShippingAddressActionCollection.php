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
 * @extends MapperSequence<MyCartUpdateItemShippingAddressAction>
 * @method MyCartUpdateItemShippingAddressAction current()
 * @method MyCartUpdateItemShippingAddressAction at($offset)
 */
class MyCartUpdateItemShippingAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCartUpdateItemShippingAddressAction $value
     * @psalm-param MyCartUpdateItemShippingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartUpdateItemShippingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartUpdateItemShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartUpdateItemShippingAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCartUpdateItemShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCartUpdateItemShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
