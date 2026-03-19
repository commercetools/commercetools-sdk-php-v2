<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitSetCustomerGroupAssignmentsAction>
 * @method BusinessUnitSetCustomerGroupAssignmentsAction current()
 * @method BusinessUnitSetCustomerGroupAssignmentsAction end()
 * @method BusinessUnitSetCustomerGroupAssignmentsAction at($offset)
 */
class BusinessUnitSetCustomerGroupAssignmentsActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitSetCustomerGroupAssignmentsAction $value
     * @psalm-param BusinessUnitSetCustomerGroupAssignmentsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitSetCustomerGroupAssignmentsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitSetCustomerGroupAssignmentsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitSetCustomerGroupAssignmentsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitSetCustomerGroupAssignmentsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitSetCustomerGroupAssignmentsAction $data */
                $data = BusinessUnitSetCustomerGroupAssignmentsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
