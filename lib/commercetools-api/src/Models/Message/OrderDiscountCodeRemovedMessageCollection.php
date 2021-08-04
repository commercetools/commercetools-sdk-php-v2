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
 * @extends MessageCollection<OrderDiscountCodeRemovedMessage>
 * @method OrderDiscountCodeRemovedMessage current()
 * @method OrderDiscountCodeRemovedMessage end()
 * @method OrderDiscountCodeRemovedMessage at($offset)
 */
class OrderDiscountCodeRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert OrderDiscountCodeRemovedMessage $value
     * @psalm-param OrderDiscountCodeRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderDiscountCodeRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderDiscountCodeRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderDiscountCodeRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderDiscountCodeRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderDiscountCodeRemovedMessage $data */
                $data = OrderDiscountCodeRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
