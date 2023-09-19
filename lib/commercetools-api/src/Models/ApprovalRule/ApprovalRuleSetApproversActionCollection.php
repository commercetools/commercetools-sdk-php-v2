<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Api\Models\ApprovalRule\ApprovalRuleUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ApprovalRuleUpdateActionCollection<ApprovalRuleSetApproversAction>
 * @method ApprovalRuleSetApproversAction current()
 * @method ApprovalRuleSetApproversAction end()
 * @method ApprovalRuleSetApproversAction at($offset)
 */
class ApprovalRuleSetApproversActionCollection extends ApprovalRuleUpdateActionCollection
{
    /**
     * @psalm-assert ApprovalRuleSetApproversAction $value
     * @psalm-param ApprovalRuleSetApproversAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRuleSetApproversActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRuleSetApproversAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRuleSetApproversAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRuleSetApproversAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRuleSetApproversAction $data */
                $data = ApprovalRuleSetApproversActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
