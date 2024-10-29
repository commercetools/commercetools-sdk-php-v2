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
 * @extends ApprovalRuleUpdateActionCollection<ApprovalRuleSetCustomTypeAction>
 * @method ApprovalRuleSetCustomTypeAction current()
 * @method ApprovalRuleSetCustomTypeAction end()
 * @method ApprovalRuleSetCustomTypeAction at($offset)
 */
class ApprovalRuleSetCustomTypeActionCollection extends ApprovalRuleUpdateActionCollection
{
    /**
     * @psalm-assert ApprovalRuleSetCustomTypeAction $value
     * @psalm-param ApprovalRuleSetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRuleSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRuleSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRuleSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRuleSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRuleSetCustomTypeAction $data */
                $data = ApprovalRuleSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
