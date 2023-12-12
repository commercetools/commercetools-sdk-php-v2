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
 * @extends MessagePayloadCollection<ApprovalRuleKeySetMessagePayload>
 * @method ApprovalRuleKeySetMessagePayload current()
 * @method ApprovalRuleKeySetMessagePayload end()
 * @method ApprovalRuleKeySetMessagePayload at($offset)
 */
class ApprovalRuleKeySetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ApprovalRuleKeySetMessagePayload $value
     * @psalm-param ApprovalRuleKeySetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRuleKeySetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRuleKeySetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRuleKeySetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRuleKeySetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRuleKeySetMessagePayload $data */
                $data = ApprovalRuleKeySetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
