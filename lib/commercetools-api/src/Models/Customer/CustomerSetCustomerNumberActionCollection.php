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
 * @extends CustomerUpdateActionCollection<CustomerSetCustomerNumberAction>
 * @method CustomerSetCustomerNumberAction current()
 * @method CustomerSetCustomerNumberAction end()
 * @method CustomerSetCustomerNumberAction at($offset)
 */
class CustomerSetCustomerNumberActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerSetCustomerNumberAction $value
     * @psalm-param CustomerSetCustomerNumberAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSetCustomerNumberActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetCustomerNumberAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetCustomerNumberAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerSetCustomerNumberAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerSetCustomerNumberAction $data */
                $data = CustomerSetCustomerNumberActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
