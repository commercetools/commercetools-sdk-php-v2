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
 * @extends OrderMessagePayloadCollection<OrderLineItemDiscountSetMessagePayload>
 * @method OrderLineItemDiscountSetMessagePayload current()
 * @method OrderLineItemDiscountSetMessagePayload end()
 * @method OrderLineItemDiscountSetMessagePayload at($offset)
 */
class OrderLineItemDiscountSetMessagePayloadCollection extends OrderMessagePayloadCollection
{
    /**
     * @psalm-assert OrderLineItemDiscountSetMessagePayload $value
     * @psalm-param OrderLineItemDiscountSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderLineItemDiscountSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderLineItemDiscountSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderLineItemDiscountSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderLineItemDiscountSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderLineItemDiscountSetMessagePayload $data */
                $data = OrderLineItemDiscountSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
