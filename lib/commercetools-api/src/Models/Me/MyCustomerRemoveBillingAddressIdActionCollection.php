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
 * @extends MyCustomerUpdateActionCollection<MyCustomerRemoveBillingAddressIdAction>
 * @method MyCustomerRemoveBillingAddressIdAction current()
 * @method MyCustomerRemoveBillingAddressIdAction end()
 * @method MyCustomerRemoveBillingAddressIdAction at($offset)
 */
class MyCustomerRemoveBillingAddressIdActionCollection extends MyCustomerUpdateActionCollection
{
    /**
     * @psalm-assert MyCustomerRemoveBillingAddressIdAction $value
     * @psalm-param MyCustomerRemoveBillingAddressIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCustomerRemoveBillingAddressIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerRemoveBillingAddressIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerRemoveBillingAddressIdAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCustomerRemoveBillingAddressIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCustomerRemoveBillingAddressIdAction $data */
                $data = MyCustomerRemoveBillingAddressIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
