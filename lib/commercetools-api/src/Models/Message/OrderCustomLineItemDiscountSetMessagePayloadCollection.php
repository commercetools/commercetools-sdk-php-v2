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
 * @extends OrderMessagePayloadCollection<OrderCustomLineItemDiscountSetMessagePayload>
 * @method OrderCustomLineItemDiscountSetMessagePayload current()
 * @method OrderCustomLineItemDiscountSetMessagePayload end()
 * @method OrderCustomLineItemDiscountSetMessagePayload at($offset)
 */
class OrderCustomLineItemDiscountSetMessagePayloadCollection extends OrderMessagePayloadCollection
{
    /**
     * @psalm-assert OrderCustomLineItemDiscountSetMessagePayload $value
     * @psalm-param OrderCustomLineItemDiscountSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCustomLineItemDiscountSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomLineItemDiscountSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomLineItemDiscountSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderCustomLineItemDiscountSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderCustomLineItemDiscountSetMessagePayload $data */
                $data = OrderCustomLineItemDiscountSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
