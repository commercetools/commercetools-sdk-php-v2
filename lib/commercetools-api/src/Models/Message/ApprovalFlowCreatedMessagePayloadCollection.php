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
 * @extends MessagePayloadCollection<ApprovalFlowCreatedMessagePayload>
 * @method ApprovalFlowCreatedMessagePayload current()
 * @method ApprovalFlowCreatedMessagePayload end()
 * @method ApprovalFlowCreatedMessagePayload at($offset)
 */
class ApprovalFlowCreatedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ApprovalFlowCreatedMessagePayload $value
     * @psalm-param ApprovalFlowCreatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalFlowCreatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalFlowCreatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalFlowCreatedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalFlowCreatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalFlowCreatedMessagePayload $data */
                $data = ApprovalFlowCreatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
