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
 * @extends ApprovalRuleUpdateActionCollection<ApprovalRuleSetKeyAction>
 * @method ApprovalRuleSetKeyAction current()
 * @method ApprovalRuleSetKeyAction end()
 * @method ApprovalRuleSetKeyAction at($offset)
 */
class ApprovalRuleSetKeyActionCollection extends ApprovalRuleUpdateActionCollection
{
    /**
     * @psalm-assert ApprovalRuleSetKeyAction $value
     * @psalm-param ApprovalRuleSetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRuleSetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRuleSetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRuleSetKeyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRuleSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRuleSetKeyAction $data */
                $data = ApprovalRuleSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
