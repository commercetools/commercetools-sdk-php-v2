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
 * @extends CustomerUpdateActionCollection<CustomerRemoveBillingAddressIdAction>
 * @method CustomerRemoveBillingAddressIdAction current()
 * @method CustomerRemoveBillingAddressIdAction at($offset)
 */
class CustomerRemoveBillingAddressIdActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerRemoveBillingAddressIdAction $value
     * @psalm-param CustomerRemoveBillingAddressIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerRemoveBillingAddressIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerRemoveBillingAddressIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerRemoveBillingAddressIdAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerRemoveBillingAddressIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerRemoveBillingAddressIdAction $data */
                $data = CustomerRemoveBillingAddressIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
