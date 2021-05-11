<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<OrderShippingInfoSetMessagePayload>
 * @method OrderShippingInfoSetMessagePayload current()
 * @method OrderShippingInfoSetMessagePayload at($offset)
 */
class OrderShippingInfoSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert OrderShippingInfoSetMessagePayload $value
     * @psalm-param OrderShippingInfoSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderShippingInfoSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderShippingInfoSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderShippingInfoSetMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?OrderShippingInfoSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderShippingInfoSetMessagePayload $data */
                $data = OrderShippingInfoSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
