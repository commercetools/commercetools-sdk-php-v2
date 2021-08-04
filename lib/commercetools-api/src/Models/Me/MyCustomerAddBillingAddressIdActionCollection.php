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
 * @extends MyCustomerUpdateActionCollection<MyCustomerAddBillingAddressIdAction>
 * @method MyCustomerAddBillingAddressIdAction current()
 * @method MyCustomerAddBillingAddressIdAction end()
 * @method MyCustomerAddBillingAddressIdAction at($offset)
 */
class MyCustomerAddBillingAddressIdActionCollection extends MyCustomerUpdateActionCollection
{
    /**
     * @psalm-assert MyCustomerAddBillingAddressIdAction $value
     * @psalm-param MyCustomerAddBillingAddressIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCustomerAddBillingAddressIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerAddBillingAddressIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerAddBillingAddressIdAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCustomerAddBillingAddressIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCustomerAddBillingAddressIdAction $data */
                $data = MyCustomerAddBillingAddressIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
