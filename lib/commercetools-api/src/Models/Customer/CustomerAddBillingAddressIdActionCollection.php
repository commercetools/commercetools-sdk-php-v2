<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomerAddBillingAddressIdAction>
 *
 * @method CustomerAddBillingAddressIdAction current()
 * @method CustomerAddBillingAddressIdAction at($offset)
 */
class CustomerAddBillingAddressIdActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerAddBillingAddressIdAction $value
     * @psalm-param CustomerAddBillingAddressIdAction|stdClass $value
     *
     * @param mixed $value
     *
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
        return function (int $index): ?CustomerAddBillingAddressIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerAddBillingAddressIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
