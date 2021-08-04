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
 * @extends MyCustomerUpdateActionCollection<MyCustomerRemoveShippingAddressIdAction>
 * @method MyCustomerRemoveShippingAddressIdAction current()
 * @method MyCustomerRemoveShippingAddressIdAction end()
 * @method MyCustomerRemoveShippingAddressIdAction at($offset)
 */
class MyCustomerRemoveShippingAddressIdActionCollection extends MyCustomerUpdateActionCollection
{
    /**
     * @psalm-assert MyCustomerRemoveShippingAddressIdAction $value
     * @psalm-param MyCustomerRemoveShippingAddressIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCustomerRemoveShippingAddressIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerRemoveShippingAddressIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerRemoveShippingAddressIdAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCustomerRemoveShippingAddressIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCustomerRemoveShippingAddressIdAction $data */
                $data = MyCustomerRemoveShippingAddressIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
