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
 * @extends MessagePayloadCollection<ApprovalFlowRejectedMessagePayload>
 * @method ApprovalFlowRejectedMessagePayload current()
 * @method ApprovalFlowRejectedMessagePayload end()
 * @method ApprovalFlowRejectedMessagePayload at($offset)
 */
class ApprovalFlowRejectedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ApprovalFlowRejectedMessagePayload $value
     * @psalm-param ApprovalFlowRejectedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalFlowRejectedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalFlowRejectedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalFlowRejectedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalFlowRejectedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalFlowRejectedMessagePayload $data */
                $data = ApprovalFlowRejectedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
