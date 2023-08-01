<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\OrderMessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderMessageCollection<OrderCustomTypeRemovedMessage>
 * @method OrderCustomTypeRemovedMessage current()
 * @method OrderCustomTypeRemovedMessage end()
 * @method OrderCustomTypeRemovedMessage at($offset)
 */
class OrderCustomTypeRemovedMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert OrderCustomTypeRemovedMessage $value
     * @psalm-param OrderCustomTypeRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCustomTypeRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomTypeRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomTypeRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderCustomTypeRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderCustomTypeRemovedMessage $data */
                $data = OrderCustomTypeRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
