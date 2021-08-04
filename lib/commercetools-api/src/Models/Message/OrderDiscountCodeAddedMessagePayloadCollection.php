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
 * @extends MessagePayloadCollection<OrderDiscountCodeAddedMessagePayload>
 * @method OrderDiscountCodeAddedMessagePayload current()
 * @method OrderDiscountCodeAddedMessagePayload at($offset)
 */
class OrderDiscountCodeAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert OrderDiscountCodeAddedMessagePayload $value
     * @psalm-param OrderDiscountCodeAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderDiscountCodeAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderDiscountCodeAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderDiscountCodeAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderDiscountCodeAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderDiscountCodeAddedMessagePayload $data */
                $data = OrderDiscountCodeAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
