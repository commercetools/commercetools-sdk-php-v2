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
 * @extends MapperSequence<OrderShippingRateInputSetMessage>
 * @method OrderShippingRateInputSetMessage current()
 * @method OrderShippingRateInputSetMessage at($offset)
 */
class OrderShippingRateInputSetMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderShippingRateInputSetMessage $value
     * @psalm-param OrderShippingRateInputSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderShippingRateInputSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderShippingRateInputSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderShippingRateInputSetMessage
     */
    protected function mapper()
    {
        return function (int $index): ?OrderShippingRateInputSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderShippingRateInputSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
