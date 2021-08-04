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
 * @extends MessageCollection<OrderReturnInfoAddedMessage>
 * @method OrderReturnInfoAddedMessage current()
 * @method OrderReturnInfoAddedMessage end()
 * @method OrderReturnInfoAddedMessage at($offset)
 */
class OrderReturnInfoAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert OrderReturnInfoAddedMessage $value
     * @psalm-param OrderReturnInfoAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderReturnInfoAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderReturnInfoAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderReturnInfoAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderReturnInfoAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderReturnInfoAddedMessage $data */
                $data = OrderReturnInfoAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
