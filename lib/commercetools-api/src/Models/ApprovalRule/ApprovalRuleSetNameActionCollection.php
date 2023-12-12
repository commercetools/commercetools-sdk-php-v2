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
 * @extends ApprovalRuleUpdateActionCollection<ApprovalRuleSetNameAction>
 * @method ApprovalRuleSetNameAction current()
 * @method ApprovalRuleSetNameAction end()
 * @method ApprovalRuleSetNameAction at($offset)
 */
class ApprovalRuleSetNameActionCollection extends ApprovalRuleUpdateActionCollection
{
    /**
     * @psalm-assert ApprovalRuleSetNameAction $value
     * @psalm-param ApprovalRuleSetNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRuleSetNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRuleSetNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRuleSetNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRuleSetNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRuleSetNameAction $data */
                $data = ApprovalRuleSetNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
