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
 * @extends MessageCollection<ApprovalRuleStatusSetMessage>
 * @method ApprovalRuleStatusSetMessage current()
 * @method ApprovalRuleStatusSetMessage end()
 * @method ApprovalRuleStatusSetMessage at($offset)
 */
class ApprovalRuleStatusSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ApprovalRuleStatusSetMessage $value
     * @psalm-param ApprovalRuleStatusSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRuleStatusSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRuleStatusSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRuleStatusSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRuleStatusSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRuleStatusSetMessage $data */
                $data = ApprovalRuleStatusSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
