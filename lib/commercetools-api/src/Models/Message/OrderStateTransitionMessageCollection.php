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
 * @extends MapperSequence<OrderStateTransitionMessage>
 *
 * @method OrderStateTransitionMessage current()
 * @method OrderStateTransitionMessage at($offset)
 */
class OrderStateTransitionMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderStateTransitionMessage $value
     * @psalm-param OrderStateTransitionMessage|stdClass $value
     *
     * @param mixed $value
     *
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
        return function (int $index): ?OrderStateTransitionMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderStateTransitionMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
