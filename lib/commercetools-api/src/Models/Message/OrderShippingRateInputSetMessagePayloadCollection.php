<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderShippingRateInputSetMessagePayload>
 *
 * @method OrderShippingRateInputSetMessagePayload current()
 * @method OrderShippingRateInputSetMessagePayload at($offset)
 */
class OrderShippingRateInputSetMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderShippingRateInputSetMessagePayload $value
     * @psalm-param OrderShippingRateInputSetMessagePayload|stdClass $value
     *
     * @param mixed $value
     *
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
        return function (int $index): ?OrderShippingRateInputSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderShippingRateInputSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
