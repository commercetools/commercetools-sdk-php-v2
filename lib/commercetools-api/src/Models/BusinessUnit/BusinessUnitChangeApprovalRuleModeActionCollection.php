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
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitChangeApprovalRuleModeAction>
 * @method BusinessUnitChangeApprovalRuleModeAction current()
 * @method BusinessUnitChangeApprovalRuleModeAction end()
 * @method BusinessUnitChangeApprovalRuleModeAction at($offset)
 */
class BusinessUnitChangeApprovalRuleModeActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitChangeApprovalRuleModeAction $value
     * @psalm-param BusinessUnitChangeApprovalRuleModeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitChangeApprovalRuleModeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitChangeApprovalRuleModeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitChangeApprovalRuleModeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitChangeApprovalRuleModeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitChangeApprovalRuleModeAction $data */
                $data = BusinessUnitChangeApprovalRuleModeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
