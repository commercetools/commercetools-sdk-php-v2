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
 * @extends CustomerUpdateActionCollection<CustomerSetCustomerGroupAction>
 * @method CustomerSetCustomerGroupAction current()
 * @method CustomerSetCustomerGroupAction end()
 * @method CustomerSetCustomerGroupAction at($offset)
 */
class CustomerSetCustomerGroupActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerSetCustomerGroupAction $value
     * @psalm-param CustomerSetCustomerGroupAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSetCustomerGroupActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetCustomerGroupAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetCustomerGroupAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerSetCustomerGroupAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerSetCustomerGroupAction $data */
                $data = CustomerSetCustomerGroupActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
