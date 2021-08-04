<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Customer\CustomerUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends CustomerUpdateActionCollection<CustomerAddBillingAddressIdAction>
 * @method CustomerAddBillingAddressIdAction current()
 * @method CustomerAddBillingAddressIdAction end()
 * @method CustomerAddBillingAddressIdAction at($offset)
 */
class CustomerAddBillingAddressIdActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerAddBillingAddressIdAction $value
     * @psalm-param CustomerAddBillingAddressIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerAddBillingAddressIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerAddBillingAddressIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerAddBillingAddressIdAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerAddBillingAddressIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerAddBillingAddressIdAction $data */
                $data = CustomerAddBillingAddressIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
