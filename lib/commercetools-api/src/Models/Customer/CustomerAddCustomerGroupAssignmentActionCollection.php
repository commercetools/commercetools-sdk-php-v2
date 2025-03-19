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
 * @extends CustomerUpdateActionCollection<CustomerAddCustomerGroupAssignmentAction>
 * @method CustomerAddCustomerGroupAssignmentAction current()
 * @method CustomerAddCustomerGroupAssignmentAction end()
 * @method CustomerAddCustomerGroupAssignmentAction at($offset)
 */
class CustomerAddCustomerGroupAssignmentActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerAddCustomerGroupAssignmentAction $value
     * @psalm-param CustomerAddCustomerGroupAssignmentAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerAddCustomerGroupAssignmentActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerAddCustomerGroupAssignmentAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerAddCustomerGroupAssignmentAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerAddCustomerGroupAssignmentAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerAddCustomerGroupAssignmentAction $data */
                $data = CustomerAddCustomerGroupAssignmentActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
