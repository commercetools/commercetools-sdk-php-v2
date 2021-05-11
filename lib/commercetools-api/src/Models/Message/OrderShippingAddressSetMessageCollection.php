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
 * @extends MessageCollection<OrderShippingAddressSetMessage>
 * @method OrderShippingAddressSetMessage current()
 * @method OrderShippingAddressSetMessage at($offset)
 */
class OrderShippingAddressSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert OrderShippingAddressSetMessage $value
     * @psalm-param OrderShippingAddressSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderShippingAddressSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderShippingAddressSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderShippingAddressSetMessage
     */
    protected function mapper()
    {
        return function (int $index): ?OrderShippingAddressSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderShippingAddressSetMessage $data */
                $data = OrderShippingAddressSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
