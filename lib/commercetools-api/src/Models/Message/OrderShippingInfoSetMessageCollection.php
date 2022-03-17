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
 * @extends OrderMessageCollection<OrderShippingInfoSetMessage>
 * @method OrderShippingInfoSetMessage current()
 * @method OrderShippingInfoSetMessage end()
 * @method OrderShippingInfoSetMessage at($offset)
 */
class OrderShippingInfoSetMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert OrderShippingInfoSetMessage $value
     * @psalm-param OrderShippingInfoSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderShippingInfoSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderShippingInfoSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderShippingInfoSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderShippingInfoSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderShippingInfoSetMessage $data */
                $data = OrderShippingInfoSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
