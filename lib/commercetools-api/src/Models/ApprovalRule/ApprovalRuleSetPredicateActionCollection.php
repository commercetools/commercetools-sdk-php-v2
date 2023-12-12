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
 * @extends ApprovalRuleUpdateActionCollection<ApprovalRuleSetPredicateAction>
 * @method ApprovalRuleSetPredicateAction current()
 * @method ApprovalRuleSetPredicateAction end()
 * @method ApprovalRuleSetPredicateAction at($offset)
 */
class ApprovalRuleSetPredicateActionCollection extends ApprovalRuleUpdateActionCollection
{
    /**
     * @psalm-assert ApprovalRuleSetPredicateAction $value
     * @psalm-param ApprovalRuleSetPredicateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRuleSetPredicateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRuleSetPredicateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRuleSetPredicateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRuleSetPredicateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRuleSetPredicateAction $data */
                $data = ApprovalRuleSetPredicateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
