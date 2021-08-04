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
 * @extends MessageCollection<OrderCreatedMessage>
 * @method OrderCreatedMessage current()
 * @method OrderCreatedMessage at($offset)
 */
class OrderCreatedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert OrderCreatedMessage $value
     * @psalm-param OrderCreatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCreatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCreatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCreatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderCreatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderCreatedMessage $data */
                $data = OrderCreatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
