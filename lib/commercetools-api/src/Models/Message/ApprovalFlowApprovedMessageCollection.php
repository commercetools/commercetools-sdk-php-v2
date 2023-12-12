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
 * @extends MessageCollection<ApprovalFlowApprovedMessage>
 * @method ApprovalFlowApprovedMessage current()
 * @method ApprovalFlowApprovedMessage end()
 * @method ApprovalFlowApprovedMessage at($offset)
 */
class ApprovalFlowApprovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ApprovalFlowApprovedMessage $value
     * @psalm-param ApprovalFlowApprovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalFlowApprovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalFlowApprovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalFlowApprovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalFlowApprovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalFlowApprovedMessage $data */
                $data = ApprovalFlowApprovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
