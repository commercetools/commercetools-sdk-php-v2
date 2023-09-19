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
 * @extends MessagePayloadCollection<ApprovalRulePredicateSetMessagePayload>
 * @method ApprovalRulePredicateSetMessagePayload current()
 * @method ApprovalRulePredicateSetMessagePayload end()
 * @method ApprovalRulePredicateSetMessagePayload at($offset)
 */
class ApprovalRulePredicateSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ApprovalRulePredicateSetMessagePayload $value
     * @psalm-param ApprovalRulePredicateSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRulePredicateSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRulePredicateSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRulePredicateSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRulePredicateSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRulePredicateSetMessagePayload $data */
                $data = ApprovalRulePredicateSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
