<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<ApprovalRuleApproversSetMessage>
 * @method ApprovalRuleApproversSetMessage current()
 * @method ApprovalRuleApproversSetMessage end()
 * @method ApprovalRuleApproversSetMessage at($offset)
 */
class ApprovalRuleApproversSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ApprovalRuleApproversSetMessage $value
     * @psalm-param ApprovalRuleApproversSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRuleApproversSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRuleApproversSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRuleApproversSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRuleApproversSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRuleApproversSetMessage $data */
                $data = ApprovalRuleApproversSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
