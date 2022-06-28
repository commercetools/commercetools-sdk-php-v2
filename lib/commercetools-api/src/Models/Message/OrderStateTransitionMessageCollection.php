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
 * @extends OrderMessageCollection<OrderStateTransitionMessage>
 * @method OrderStateTransitionMessage current()
 * @method OrderStateTransitionMessage end()
 * @method OrderStateTransitionMessage at($offset)
 */
class OrderStateTransitionMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert OrderStateTransitionMessage $value
     * @psalm-param OrderStateTransitionMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderStateTransitionMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderStateTransitionMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderStateTransitionMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderStateTransitionMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderStateTransitionMessage $data */
                $data = OrderStateTransitionMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
