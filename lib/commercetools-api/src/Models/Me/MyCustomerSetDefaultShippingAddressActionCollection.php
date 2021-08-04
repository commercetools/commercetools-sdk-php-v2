<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Me\MyCustomerUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MyCustomerUpdateActionCollection<MyCustomerSetDefaultShippingAddressAction>
 * @method MyCustomerSetDefaultShippingAddressAction current()
 * @method MyCustomerSetDefaultShippingAddressAction at($offset)
 */
class MyCustomerSetDefaultShippingAddressActionCollection extends MyCustomerUpdateActionCollection
{
    /**
     * @psalm-assert MyCustomerSetDefaultShippingAddressAction $value
     * @psalm-param MyCustomerSetDefaultShippingAddressAction|stdClass $value
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
        return function (?int $index): ?MyCustomerSetDefaultShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCustomerSetDefaultShippingAddressAction $data */
                $data = MyCustomerSetDefaultShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
