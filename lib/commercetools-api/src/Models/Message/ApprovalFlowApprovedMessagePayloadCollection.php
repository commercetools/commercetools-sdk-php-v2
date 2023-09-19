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
 * @extends MessagePayloadCollection<ApprovalFlowApprovedMessagePayload>
 * @method ApprovalFlowApprovedMessagePayload current()
 * @method ApprovalFlowApprovedMessagePayload end()
 * @method ApprovalFlowApprovedMessagePayload at($offset)
 */
class ApprovalFlowApprovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ApprovalFlowApprovedMessagePayload $value
     * @psalm-param ApprovalFlowApprovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalFlowApprovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalFlowApprovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalFlowApprovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalFlowApprovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalFlowApprovedMessagePayload $data */
                $data = ApprovalFlowApprovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
