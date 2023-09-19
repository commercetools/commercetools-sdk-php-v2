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
 * @extends MessageCollection<ApprovalRuleKeySetMessage>
 * @method ApprovalRuleKeySetMessage current()
 * @method ApprovalRuleKeySetMessage end()
 * @method ApprovalRuleKeySetMessage at($offset)
 */
class ApprovalRuleKeySetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ApprovalRuleKeySetMessage $value
     * @psalm-param ApprovalRuleKeySetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRuleKeySetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRuleKeySetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRuleKeySetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRuleKeySetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRuleKeySetMessage $data */
                $data = ApprovalRuleKeySetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
