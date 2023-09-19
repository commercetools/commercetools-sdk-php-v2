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
 * @extends MessageCollection<ApprovalFlowCreatedMessage>
 * @method ApprovalFlowCreatedMessage current()
 * @method ApprovalFlowCreatedMessage end()
 * @method ApprovalFlowCreatedMessage at($offset)
 */
class ApprovalFlowCreatedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ApprovalFlowCreatedMessage $value
     * @psalm-param ApprovalFlowCreatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalFlowCreatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalFlowCreatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalFlowCreatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalFlowCreatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalFlowCreatedMessage $data */
                $data = ApprovalFlowCreatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
