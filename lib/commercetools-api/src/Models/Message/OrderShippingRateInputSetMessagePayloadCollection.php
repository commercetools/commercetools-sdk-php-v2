<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\OrderMessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderMessagePayloadCollection<OrderShippingRateInputSetMessagePayload>
 * @method OrderShippingRateInputSetMessagePayload current()
 * @method OrderShippingRateInputSetMessagePayload end()
 * @method OrderShippingRateInputSetMessagePayload at($offset)
 */
class OrderShippingRateInputSetMessagePayloadCollection extends OrderMessagePayloadCollection
{
    /**
     * @psalm-assert OrderShippingRateInputSetMessagePayload $value
     * @psalm-param OrderShippingRateInputSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderShippingRateInputSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderShippingRateInputSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderShippingRateInputSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderShippingRateInputSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderShippingRateInputSetMessagePayload $data */
                $data = OrderShippingRateInputSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
