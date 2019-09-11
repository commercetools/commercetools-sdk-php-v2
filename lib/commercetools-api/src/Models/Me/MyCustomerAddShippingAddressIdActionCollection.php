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
 * @extends MapperSequence<MyCustomerAddShippingAddressIdAction>
 *
 * @method MyCustomerAddShippingAddressIdAction current()
 * @method MyCustomerAddShippingAddressIdAction at($offset)
 */
class MyCustomerAddShippingAddressIdActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCustomerAddShippingAddressIdAction $value
     * @psalm-param MyCustomerAddShippingAddressIdAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyCustomerAddShippingAddressIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerAddShippingAddressIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerAddShippingAddressIdAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCustomerAddShippingAddressIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCustomerAddShippingAddressIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
