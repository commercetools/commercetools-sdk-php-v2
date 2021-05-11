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
 * @extends MessagePayloadCollection<OrderStateTransitionMessagePayload>
 * @method OrderStateTransitionMessagePayload current()
 * @method OrderStateTransitionMessagePayload at($offset)
 */
class OrderStateTransitionMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert OrderStateTransitionMessagePayload $value
     * @psalm-param OrderStateTransitionMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderStateTransitionMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderStateTransitionMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderStateTransitionMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?OrderStateTransitionMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderStateTransitionMessagePayload $data */
                $data = OrderStateTransitionMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
