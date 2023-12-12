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
 * @extends MessageCollection<ApprovalRuleNameSetMessage>
 * @method ApprovalRuleNameSetMessage current()
 * @method ApprovalRuleNameSetMessage end()
 * @method ApprovalRuleNameSetMessage at($offset)
 */
class ApprovalRuleNameSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ApprovalRuleNameSetMessage $value
     * @psalm-param ApprovalRuleNameSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRuleNameSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRuleNameSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRuleNameSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRuleNameSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRuleNameSetMessage $data */
                $data = ApprovalRuleNameSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
