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
 * @extends MessagePayloadCollection<ApprovalFlowCompletedMessagePayload>
 * @method ApprovalFlowCompletedMessagePayload current()
 * @method ApprovalFlowCompletedMessagePayload end()
 * @method ApprovalFlowCompletedMessagePayload at($offset)
 */
class ApprovalFlowCompletedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ApprovalFlowCompletedMessagePayload $value
     * @psalm-param ApprovalFlowCompletedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalFlowCompletedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalFlowCompletedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalFlowCompletedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalFlowCompletedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalFlowCompletedMessagePayload $data */
                $data = ApprovalFlowCompletedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
