<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<RuleApprover>
 * @method RuleApprover current()
 * @method RuleApprover end()
 * @method RuleApprover at($offset)
 */
class RuleApproverCollection extends MapperSequence
{
    /**
     * @psalm-assert RuleApprover $value
     * @psalm-param RuleApprover|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RuleApproverCollection
     */
    public function add($value)
    {
        if (!$value instanceof RuleApprover) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RuleApprover
     */
    protected function mapper()
    {
        return function (?int $index): ?RuleApprover {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RuleApprover $data */
                $data = RuleApproverModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
