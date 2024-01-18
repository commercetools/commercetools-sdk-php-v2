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
 * @extends ApprovalFlowUpdateActionCollection<ApprovalFlowSetCustomFieldAction>
 * @method ApprovalFlowSetCustomFieldAction current()
 * @method ApprovalFlowSetCustomFieldAction end()
 * @method ApprovalFlowSetCustomFieldAction at($offset)
 */
class ApprovalFlowSetCustomFieldActionCollection extends ApprovalFlowUpdateActionCollection
{
    /**
     * @psalm-assert ApprovalFlowSetCustomFieldAction $value
     * @psalm-param ApprovalFlowSetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalFlowSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalFlowSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalFlowSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalFlowSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalFlowSetCustomFieldAction $data */
                $data = ApprovalFlowSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
