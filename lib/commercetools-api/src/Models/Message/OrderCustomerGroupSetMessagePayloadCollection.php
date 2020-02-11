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
 * @extends MapperSequence<OrderCustomerGroupSetMessagePayload>
 * @method OrderCustomerGroupSetMessagePayload current()
 * @method OrderCustomerGroupSetMessagePayload at($offset)
 */
class OrderCustomerGroupSetMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderCustomerGroupSetMessagePayload $value
     * @psalm-param OrderCustomerGroupSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCustomerGroupSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomerGroupSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomerGroupSetMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?OrderCustomerGroupSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderCustomerGroupSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
