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
 * @extends MessageCollection<ApprovalRuleRequestersSetMessage>
 * @method ApprovalRuleRequestersSetMessage current()
 * @method ApprovalRuleRequestersSetMessage end()
 * @method ApprovalRuleRequestersSetMessage at($offset)
 */
class ApprovalRuleRequestersSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ApprovalRuleRequestersSetMessage $value
     * @psalm-param ApprovalRuleRequestersSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRuleRequestersSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRuleRequestersSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRuleRequestersSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRuleRequestersSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRuleRequestersSetMessage $data */
                $data = ApprovalRuleRequestersSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
