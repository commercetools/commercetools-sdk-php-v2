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
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitAddCustomerGroupAssignmentAction>
 * @method BusinessUnitAddCustomerGroupAssignmentAction current()
 * @method BusinessUnitAddCustomerGroupAssignmentAction end()
 * @method BusinessUnitAddCustomerGroupAssignmentAction at($offset)
 */
class BusinessUnitAddCustomerGroupAssignmentActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitAddCustomerGroupAssignmentAction $value
     * @psalm-param BusinessUnitAddCustomerGroupAssignmentAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAddCustomerGroupAssignmentActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAddCustomerGroupAssignmentAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAddCustomerGroupAssignmentAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAddCustomerGroupAssignmentAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAddCustomerGroupAssignmentAction $data */
                $data = BusinessUnitAddCustomerGroupAssignmentActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
