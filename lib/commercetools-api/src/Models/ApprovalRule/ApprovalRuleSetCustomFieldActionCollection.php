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
 * @extends ApprovalRuleUpdateActionCollection<ApprovalRuleSetCustomFieldAction>
 * @method ApprovalRuleSetCustomFieldAction current()
 * @method ApprovalRuleSetCustomFieldAction end()
 * @method ApprovalRuleSetCustomFieldAction at($offset)
 */
class ApprovalRuleSetCustomFieldActionCollection extends ApprovalRuleUpdateActionCollection
{
    /**
     * @psalm-assert ApprovalRuleSetCustomFieldAction $value
     * @psalm-param ApprovalRuleSetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRuleSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRuleSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRuleSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRuleSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRuleSetCustomFieldAction $data */
                $data = ApprovalRuleSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
