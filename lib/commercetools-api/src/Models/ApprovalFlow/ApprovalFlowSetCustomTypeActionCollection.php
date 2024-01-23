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
 * @extends ApprovalFlowUpdateActionCollection<ApprovalFlowSetCustomTypeAction>
 * @method ApprovalFlowSetCustomTypeAction current()
 * @method ApprovalFlowSetCustomTypeAction end()
 * @method ApprovalFlowSetCustomTypeAction at($offset)
 */
class ApprovalFlowSetCustomTypeActionCollection extends ApprovalFlowUpdateActionCollection
{
    /**
     * @psalm-assert ApprovalFlowSetCustomTypeAction $value
     * @psalm-param ApprovalFlowSetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalFlowSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalFlowSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalFlowSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalFlowSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalFlowSetCustomTypeAction $data */
                $data = ApprovalFlowSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
