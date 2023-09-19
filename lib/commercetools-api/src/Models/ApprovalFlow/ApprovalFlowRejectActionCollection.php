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
 * @extends ApprovalFlowUpdateActionCollection<ApprovalFlowRejectAction>
 * @method ApprovalFlowRejectAction current()
 * @method ApprovalFlowRejectAction end()
 * @method ApprovalFlowRejectAction at($offset)
 */
class ApprovalFlowRejectActionCollection extends ApprovalFlowUpdateActionCollection
{
    /**
     * @psalm-assert ApprovalFlowRejectAction $value
     * @psalm-param ApprovalFlowRejectAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalFlowRejectActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalFlowRejectAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalFlowRejectAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalFlowRejectAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalFlowRejectAction $data */
                $data = ApprovalFlowRejectActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
