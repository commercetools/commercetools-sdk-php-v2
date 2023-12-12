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
 * @extends MessageCollection<ApprovalRulePredicateSetMessage>
 * @method ApprovalRulePredicateSetMessage current()
 * @method ApprovalRulePredicateSetMessage end()
 * @method ApprovalRulePredicateSetMessage at($offset)
 */
class ApprovalRulePredicateSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ApprovalRulePredicateSetMessage $value
     * @psalm-param ApprovalRulePredicateSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRulePredicateSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRulePredicateSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRulePredicateSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRulePredicateSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRulePredicateSetMessage $data */
                $data = ApprovalRulePredicateSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
