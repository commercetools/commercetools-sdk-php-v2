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
 * @extends MessagePayloadCollection<ApprovalRuleNameSetMessagePayload>
 * @method ApprovalRuleNameSetMessagePayload current()
 * @method ApprovalRuleNameSetMessagePayload end()
 * @method ApprovalRuleNameSetMessagePayload at($offset)
 */
class ApprovalRuleNameSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ApprovalRuleNameSetMessagePayload $value
     * @psalm-param ApprovalRuleNameSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRuleNameSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRuleNameSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRuleNameSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRuleNameSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRuleNameSetMessagePayload $data */
                $data = ApprovalRuleNameSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
