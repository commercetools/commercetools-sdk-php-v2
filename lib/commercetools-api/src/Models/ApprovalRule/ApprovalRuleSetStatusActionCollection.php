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
 * @extends ApprovalRuleUpdateActionCollection<ApprovalRuleSetStatusAction>
 * @method ApprovalRuleSetStatusAction current()
 * @method ApprovalRuleSetStatusAction end()
 * @method ApprovalRuleSetStatusAction at($offset)
 */
class ApprovalRuleSetStatusActionCollection extends ApprovalRuleUpdateActionCollection
{
    /**
     * @psalm-assert ApprovalRuleSetStatusAction $value
     * @psalm-param ApprovalRuleSetStatusAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRuleSetStatusActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRuleSetStatusAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRuleSetStatusAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRuleSetStatusAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRuleSetStatusAction $data */
                $data = ApprovalRuleSetStatusActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
