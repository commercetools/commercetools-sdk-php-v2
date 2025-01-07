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
 * @extends CustomerUpdateActionCollection<CustomerRemoveCustomerGroupAssignmentAction>
 * @method CustomerRemoveCustomerGroupAssignmentAction current()
 * @method CustomerRemoveCustomerGroupAssignmentAction end()
 * @method CustomerRemoveCustomerGroupAssignmentAction at($offset)
 */
class CustomerRemoveCustomerGroupAssignmentActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerRemoveCustomerGroupAssignmentAction $value
     * @psalm-param CustomerRemoveCustomerGroupAssignmentAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerRemoveCustomerGroupAssignmentActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerRemoveCustomerGroupAssignmentAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerRemoveCustomerGroupAssignmentAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerRemoveCustomerGroupAssignmentAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerRemoveCustomerGroupAssignmentAction $data */
                $data = CustomerRemoveCustomerGroupAssignmentActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
