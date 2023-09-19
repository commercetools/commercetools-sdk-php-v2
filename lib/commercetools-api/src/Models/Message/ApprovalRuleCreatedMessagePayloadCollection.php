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
 * @extends MessagePayloadCollection<ApprovalRuleCreatedMessagePayload>
 * @method ApprovalRuleCreatedMessagePayload current()
 * @method ApprovalRuleCreatedMessagePayload end()
 * @method ApprovalRuleCreatedMessagePayload at($offset)
 */
class ApprovalRuleCreatedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ApprovalRuleCreatedMessagePayload $value
     * @psalm-param ApprovalRuleCreatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRuleCreatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRuleCreatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRuleCreatedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRuleCreatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRuleCreatedMessagePayload $data */
                $data = ApprovalRuleCreatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
