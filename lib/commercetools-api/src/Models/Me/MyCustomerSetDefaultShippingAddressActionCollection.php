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
 * @extends MapperSequence<MyCustomerSetDefaultShippingAddressAction>
 *
 * @method MyCustomerSetDefaultShippingAddressAction current()
 * @method MyCustomerSetDefaultShippingAddressAction at($offset)
 */
class MyCustomerSetDefaultShippingAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCustomerSetDefaultShippingAddressAction $value
     * @psalm-param MyCustomerSetDefaultShippingAddressAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyCustomerSetDefaultShippingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerSetDefaultShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerSetDefaultShippingAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCustomerSetDefaultShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCustomerSetDefaultShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
