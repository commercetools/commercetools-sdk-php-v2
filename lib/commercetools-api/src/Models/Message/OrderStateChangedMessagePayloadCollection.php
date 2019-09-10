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
 * @extends MapperSequence<OrderStateChangedMessagePayload>
 *
 * @method OrderStateChangedMessagePayload current()
 * @method OrderStateChangedMessagePayload at($offset)
 */
class OrderStateChangedMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderStateChangedMessagePayload $value
     * @psalm-param OrderStateChangedMessagePayload|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return OrderStateChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderStateChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderStateChangedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?OrderStateChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderStateChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
