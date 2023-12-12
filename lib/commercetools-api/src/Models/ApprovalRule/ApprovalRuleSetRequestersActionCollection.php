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
 * @extends ApprovalRuleUpdateActionCollection<ApprovalRuleSetRequestersAction>
 * @method ApprovalRuleSetRequestersAction current()
 * @method ApprovalRuleSetRequestersAction end()
 * @method ApprovalRuleSetRequestersAction at($offset)
 */
class ApprovalRuleSetRequestersActionCollection extends ApprovalRuleUpdateActionCollection
{
    /**
     * @psalm-assert ApprovalRuleSetRequestersAction $value
     * @psalm-param ApprovalRuleSetRequestersAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRuleSetRequestersActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRuleSetRequestersAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRuleSetRequestersAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRuleSetRequestersAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRuleSetRequestersAction $data */
                $data = ApprovalRuleSetRequestersActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
