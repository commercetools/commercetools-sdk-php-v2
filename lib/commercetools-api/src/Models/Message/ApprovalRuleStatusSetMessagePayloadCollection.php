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
 * @extends MessagePayloadCollection<ApprovalRuleStatusSetMessagePayload>
 * @method ApprovalRuleStatusSetMessagePayload current()
 * @method ApprovalRuleStatusSetMessagePayload end()
 * @method ApprovalRuleStatusSetMessagePayload at($offset)
 */
class ApprovalRuleStatusSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ApprovalRuleStatusSetMessagePayload $value
     * @psalm-param ApprovalRuleStatusSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRuleStatusSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRuleStatusSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRuleStatusSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRuleStatusSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRuleStatusSetMessagePayload $data */
                $data = ApprovalRuleStatusSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
