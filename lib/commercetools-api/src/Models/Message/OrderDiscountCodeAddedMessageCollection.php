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
 * @extends MessageCollection<OrderDiscountCodeAddedMessage>
 * @method OrderDiscountCodeAddedMessage current()
 * @method OrderDiscountCodeAddedMessage end()
 * @method OrderDiscountCodeAddedMessage at($offset)
 */
class OrderDiscountCodeAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert OrderDiscountCodeAddedMessage $value
     * @psalm-param OrderDiscountCodeAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderDiscountCodeAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderDiscountCodeAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderDiscountCodeAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderDiscountCodeAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderDiscountCodeAddedMessage $data */
                $data = OrderDiscountCodeAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
