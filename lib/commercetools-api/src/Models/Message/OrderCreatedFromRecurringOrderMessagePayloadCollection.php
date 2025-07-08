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
 * @extends OrderMessagePayloadCollection<OrderCreatedFromRecurringOrderMessagePayload>
 * @method OrderCreatedFromRecurringOrderMessagePayload current()
 * @method OrderCreatedFromRecurringOrderMessagePayload end()
 * @method OrderCreatedFromRecurringOrderMessagePayload at($offset)
 */
class OrderCreatedFromRecurringOrderMessagePayloadCollection extends OrderMessagePayloadCollection
{
    /**
     * @psalm-assert OrderCreatedFromRecurringOrderMessagePayload $value
     * @psalm-param OrderCreatedFromRecurringOrderMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCreatedFromRecurringOrderMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCreatedFromRecurringOrderMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCreatedFromRecurringOrderMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderCreatedFromRecurringOrderMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderCreatedFromRecurringOrderMessagePayload $data */
                $data = OrderCreatedFromRecurringOrderMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
