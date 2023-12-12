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
 * @extends MessageCollection<ApprovalFlowCompletedMessage>
 * @method ApprovalFlowCompletedMessage current()
 * @method ApprovalFlowCompletedMessage end()
 * @method ApprovalFlowCompletedMessage at($offset)
 */
class ApprovalFlowCompletedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ApprovalFlowCompletedMessage $value
     * @psalm-param ApprovalFlowCompletedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalFlowCompletedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalFlowCompletedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalFlowCompletedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalFlowCompletedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalFlowCompletedMessage $data */
                $data = ApprovalFlowCompletedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
