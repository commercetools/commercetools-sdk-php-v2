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
 * @extends CustomerUpdateActionCollection<CustomerRemoveShippingAddressIdAction>
 * @method CustomerRemoveShippingAddressIdAction current()
 * @method CustomerRemoveShippingAddressIdAction end()
 * @method CustomerRemoveShippingAddressIdAction at($offset)
 */
class CustomerRemoveShippingAddressIdActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerRemoveShippingAddressIdAction $value
     * @psalm-param CustomerRemoveShippingAddressIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerRemoveShippingAddressIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerRemoveShippingAddressIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerRemoveShippingAddressIdAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerRemoveShippingAddressIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerRemoveShippingAddressIdAction $data */
                $data = CustomerRemoveShippingAddressIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
