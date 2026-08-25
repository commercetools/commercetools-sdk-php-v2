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
 * @extends OrderMessagePayloadCollection<OrderEstimatedDeliverySetMessagePayload>
 * @method OrderEstimatedDeliverySetMessagePayload current()
 * @method OrderEstimatedDeliverySetMessagePayload end()
 * @method OrderEstimatedDeliverySetMessagePayload at($offset)
 */
class OrderEstimatedDeliverySetMessagePayloadCollection extends OrderMessagePayloadCollection
{
    /**
     * @psalm-assert OrderEstimatedDeliverySetMessagePayload $value
     * @psalm-param OrderEstimatedDeliverySetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderEstimatedDeliverySetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEstimatedDeliverySetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEstimatedDeliverySetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderEstimatedDeliverySetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderEstimatedDeliverySetMessagePayload $data */
                $data = OrderEstimatedDeliverySetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
