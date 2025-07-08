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
 * @extends OrderMessageCollection<OrderCreatedFromRecurringOrderMessage>
 * @method OrderCreatedFromRecurringOrderMessage current()
 * @method OrderCreatedFromRecurringOrderMessage end()
 * @method OrderCreatedFromRecurringOrderMessage at($offset)
 */
class OrderCreatedFromRecurringOrderMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert OrderCreatedFromRecurringOrderMessage $value
     * @psalm-param OrderCreatedFromRecurringOrderMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCreatedFromRecurringOrderMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCreatedFromRecurringOrderMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCreatedFromRecurringOrderMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderCreatedFromRecurringOrderMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderCreatedFromRecurringOrderMessage $data */
                $data = OrderCreatedFromRecurringOrderMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
