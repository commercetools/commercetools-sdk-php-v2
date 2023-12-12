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
 * @extends MessagePayloadCollection<ApprovalRuleRequestersSetMessagePayload>
 * @method ApprovalRuleRequestersSetMessagePayload current()
 * @method ApprovalRuleRequestersSetMessagePayload end()
 * @method ApprovalRuleRequestersSetMessagePayload at($offset)
 */
class ApprovalRuleRequestersSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ApprovalRuleRequestersSetMessagePayload $value
     * @psalm-param ApprovalRuleRequestersSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRuleRequestersSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRuleRequestersSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRuleRequestersSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRuleRequestersSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRuleRequestersSetMessagePayload $data */
                $data = ApprovalRuleRequestersSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
