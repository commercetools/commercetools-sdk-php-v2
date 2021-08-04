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
 * @extends CustomerUpdateActionCollection<CustomerSetDefaultShippingAddressAction>
 * @method CustomerSetDefaultShippingAddressAction current()
 * @method CustomerSetDefaultShippingAddressAction at($offset)
 */
class CustomerSetDefaultShippingAddressActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerSetDefaultShippingAddressAction $value
     * @psalm-param CustomerSetDefaultShippingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSetDefaultShippingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetDefaultShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetDefaultShippingAddressAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerSetDefaultShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerSetDefaultShippingAddressAction $data */
                $data = CustomerSetDefaultShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
