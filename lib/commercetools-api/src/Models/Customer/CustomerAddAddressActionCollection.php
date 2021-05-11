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
 * @extends CustomerUpdateActionCollection<CustomerAddAddressAction>
 * @method CustomerAddAddressAction current()
 * @method CustomerAddAddressAction at($offset)
 */
class CustomerAddAddressActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerAddAddressAction $value
     * @psalm-param CustomerAddAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerAddAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerAddAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerAddAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerAddAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerAddAddressAction $data */
                $data = CustomerAddAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
