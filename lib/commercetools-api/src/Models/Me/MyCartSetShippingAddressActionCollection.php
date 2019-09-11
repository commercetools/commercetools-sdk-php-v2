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
 * @extends MapperSequence<MyCartSetShippingAddressAction>
 *
 * @method MyCartSetShippingAddressAction current()
 * @method MyCartSetShippingAddressAction at($offset)
 */
class MyCartSetShippingAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCartSetShippingAddressAction $value
     * @psalm-param MyCartSetShippingAddressAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyCartSetShippingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartSetShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartSetShippingAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCartSetShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCartSetShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
