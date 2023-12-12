<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<ApprovalRule>
 * @method ApprovalRule current()
 * @method ApprovalRule end()
 * @method ApprovalRule at($offset)
 */
class ApprovalRuleCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert ApprovalRule $value
     * @psalm-param ApprovalRule|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRuleCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRule) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRule
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRule {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRule $data */
                $data = ApprovalRuleModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
