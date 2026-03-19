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
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitRemoveCustomerGroupAssignmentAction>
 * @method BusinessUnitRemoveCustomerGroupAssignmentAction current()
 * @method BusinessUnitRemoveCustomerGroupAssignmentAction end()
 * @method BusinessUnitRemoveCustomerGroupAssignmentAction at($offset)
 */
class BusinessUnitRemoveCustomerGroupAssignmentActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitRemoveCustomerGroupAssignmentAction $value
     * @psalm-param BusinessUnitRemoveCustomerGroupAssignmentAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitRemoveCustomerGroupAssignmentActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitRemoveCustomerGroupAssignmentAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitRemoveCustomerGroupAssignmentAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitRemoveCustomerGroupAssignmentAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitRemoveCustomerGroupAssignmentAction $data */
                $data = BusinessUnitRemoveCustomerGroupAssignmentActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
