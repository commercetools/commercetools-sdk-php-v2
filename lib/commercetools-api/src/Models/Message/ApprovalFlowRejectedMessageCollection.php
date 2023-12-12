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
 * @extends MessageCollection<ApprovalFlowRejectedMessage>
 * @method ApprovalFlowRejectedMessage current()
 * @method ApprovalFlowRejectedMessage end()
 * @method ApprovalFlowRejectedMessage at($offset)
 */
class ApprovalFlowRejectedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ApprovalFlowRejectedMessage $value
     * @psalm-param ApprovalFlowRejectedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalFlowRejectedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalFlowRejectedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalFlowRejectedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalFlowRejectedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalFlowRejectedMessage $data */
                $data = ApprovalFlowRejectedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
