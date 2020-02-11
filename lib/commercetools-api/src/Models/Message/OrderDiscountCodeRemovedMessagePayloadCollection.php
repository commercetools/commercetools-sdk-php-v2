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
 * @extends MapperSequence<OrderDiscountCodeRemovedMessagePayload>
 * @method OrderDiscountCodeRemovedMessagePayload current()
 * @method OrderDiscountCodeRemovedMessagePayload at($offset)
 */
class OrderDiscountCodeRemovedMessagePayloadCollection extends MapperSequence
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
                $data = OrderDiscountCodeRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
