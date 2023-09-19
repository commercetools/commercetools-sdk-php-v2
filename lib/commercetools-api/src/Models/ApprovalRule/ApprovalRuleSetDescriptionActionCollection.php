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
 * @extends ApprovalRuleUpdateActionCollection<ApprovalRuleSetDescriptionAction>
 * @method ApprovalRuleSetDescriptionAction current()
 * @method ApprovalRuleSetDescriptionAction end()
 * @method ApprovalRuleSetDescriptionAction at($offset)
 */
class ApprovalRuleSetDescriptionActionCollection extends ApprovalRuleUpdateActionCollection
{
    /**
     * @psalm-assert ApprovalRuleSetDescriptionAction $value
     * @psalm-param ApprovalRuleSetDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRuleSetDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRuleSetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRuleSetDescriptionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRuleSetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRuleSetDescriptionAction $data */
                $data = ApprovalRuleSetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
