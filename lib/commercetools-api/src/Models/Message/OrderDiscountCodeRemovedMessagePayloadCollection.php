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
 * @extends MessagePayloadCollection<OrderDiscountCodeRemovedMessagePayload>
 * @method OrderDiscountCodeRemovedMessagePayload current()
 * @method OrderDiscountCodeRemovedMessagePayload at($offset)
 */
class OrderDiscountCodeRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert OrderDiscountCodeRemovedMessagePayload $value
     * @psalm-param OrderDiscountCodeRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderDiscountCodeRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderDiscountCodeRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderDiscountCodeRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?OrderDiscountCodeRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderDiscountCodeRemovedMessagePayload $data */
                $data = OrderDiscountCodeRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
