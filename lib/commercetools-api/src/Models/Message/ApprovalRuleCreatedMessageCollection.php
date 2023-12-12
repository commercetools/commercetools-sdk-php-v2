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
 * @extends MessageCollection<ApprovalRuleCreatedMessage>
 * @method ApprovalRuleCreatedMessage current()
 * @method ApprovalRuleCreatedMessage end()
 * @method ApprovalRuleCreatedMessage at($offset)
 */
class ApprovalRuleCreatedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ApprovalRuleCreatedMessage $value
     * @psalm-param ApprovalRuleCreatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRuleCreatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRuleCreatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRuleCreatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRuleCreatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRuleCreatedMessage $data */
                $data = ApprovalRuleCreatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
