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
 * @extends MapperSequence<ApprovalRuleUpdate>
 * @method ApprovalRuleUpdate current()
 * @method ApprovalRuleUpdate end()
 * @method ApprovalRuleUpdate at($offset)
 */
class ApprovalRuleUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert ApprovalRuleUpdate $value
     * @psalm-param ApprovalRuleUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRuleUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRuleUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRuleUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRuleUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRuleUpdate $data */
                $data = ApprovalRuleUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
