<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<ApprovalRuleApproversSetMessagePayload>
 * @method ApprovalRuleApproversSetMessagePayload current()
 * @method ApprovalRuleApproversSetMessagePayload end()
 * @method ApprovalRuleApproversSetMessagePayload at($offset)
 */
class ApprovalRuleApproversSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ApprovalRuleApproversSetMessagePayload $value
     * @psalm-param ApprovalRuleApproversSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRuleApproversSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRuleApproversSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRuleApproversSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRuleApproversSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRuleApproversSetMessagePayload $data */
                $data = ApprovalRuleApproversSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
