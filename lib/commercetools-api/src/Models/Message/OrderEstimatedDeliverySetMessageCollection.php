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
 * @extends OrderMessageCollection<OrderEstimatedDeliverySetMessage>
 * @method OrderEstimatedDeliverySetMessage current()
 * @method OrderEstimatedDeliverySetMessage end()
 * @method OrderEstimatedDeliverySetMessage at($offset)
 */
class OrderEstimatedDeliverySetMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert OrderEstimatedDeliverySetMessage $value
     * @psalm-param OrderEstimatedDeliverySetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderEstimatedDeliverySetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEstimatedDeliverySetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEstimatedDeliverySetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderEstimatedDeliverySetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderEstimatedDeliverySetMessage $data */
                $data = OrderEstimatedDeliverySetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
