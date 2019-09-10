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
 * @extends MapperSequence<OrderDiscountCodeStateSetMessagePayload>
 *
 * @method OrderDiscountCodeStateSetMessagePayload current()
 * @method OrderDiscountCodeStateSetMessagePayload at($offset)
 */
class OrderDiscountCodeStateSetMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderDiscountCodeStateSetMessagePayload $value
     * @psalm-param OrderDiscountCodeStateSetMessagePayload|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return OrderDiscountCodeStateSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderDiscountCodeStateSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderDiscountCodeStateSetMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?OrderDiscountCodeStateSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderDiscountCodeStateSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
