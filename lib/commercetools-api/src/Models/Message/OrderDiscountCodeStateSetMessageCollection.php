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
 * @extends MessageCollection<OrderDiscountCodeStateSetMessage>
 * @method OrderDiscountCodeStateSetMessage current()
 * @method OrderDiscountCodeStateSetMessage end()
 * @method OrderDiscountCodeStateSetMessage at($offset)
 */
class OrderDiscountCodeStateSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert OrderDiscountCodeStateSetMessage $value
     * @psalm-param OrderDiscountCodeStateSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderDiscountCodeStateSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderDiscountCodeStateSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderDiscountCodeStateSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderDiscountCodeStateSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderDiscountCodeStateSetMessage $data */
                $data = OrderDiscountCodeStateSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
