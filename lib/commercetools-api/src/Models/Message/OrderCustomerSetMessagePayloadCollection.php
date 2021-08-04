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
 * @extends MessagePayloadCollection<OrderCustomerSetMessagePayload>
 * @method OrderCustomerSetMessagePayload current()
 * @method OrderCustomerSetMessagePayload at($offset)
 */
class OrderCustomerSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert OrderCustomerSetMessagePayload $value
     * @psalm-param OrderCustomerSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCustomerSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomerSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomerSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderCustomerSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderCustomerSetMessagePayload $data */
                $data = OrderCustomerSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
