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
 * @extends CustomerUpdateActionCollection<CustomerSetCustomerGroupAssignmentsAction>
 * @method CustomerSetCustomerGroupAssignmentsAction current()
 * @method CustomerSetCustomerGroupAssignmentsAction end()
 * @method CustomerSetCustomerGroupAssignmentsAction at($offset)
 */
class CustomerSetCustomerGroupAssignmentsActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerSetCustomerGroupAssignmentsAction $value
     * @psalm-param CustomerSetCustomerGroupAssignmentsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSetCustomerGroupAssignmentsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetCustomerGroupAssignmentsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetCustomerGroupAssignmentsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerSetCustomerGroupAssignmentsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerSetCustomerGroupAssignmentsAction $data */
                $data = CustomerSetCustomerGroupAssignmentsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
