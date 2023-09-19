<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalFlow;

use Commercetools\Api\Models\ApprovalFlow\ApprovalFlowUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ApprovalFlowUpdateActionCollection<ApprovalFlowApproveAction>
 * @method ApprovalFlowApproveAction current()
 * @method ApprovalFlowApproveAction end()
 * @method ApprovalFlowApproveAction at($offset)
 */
class ApprovalFlowApproveActionCollection extends ApprovalFlowUpdateActionCollection
{
    /**
     * @psalm-assert ApprovalFlowApproveAction $value
     * @psalm-param ApprovalFlowApproveAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalFlowApproveActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalFlowApproveAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalFlowApproveAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalFlowApproveAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalFlowApproveAction $data */
                $data = ApprovalFlowApproveActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
