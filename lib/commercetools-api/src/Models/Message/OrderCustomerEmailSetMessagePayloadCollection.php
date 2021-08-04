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
 * @extends MessagePayloadCollection<OrderCustomerEmailSetMessagePayload>
 * @method OrderCustomerEmailSetMessagePayload current()
 * @method OrderCustomerEmailSetMessagePayload at($offset)
 */
class OrderCustomerEmailSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert OrderCustomerEmailSetMessagePayload $value
     * @psalm-param OrderCustomerEmailSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCustomerEmailSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomerEmailSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomerEmailSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderCustomerEmailSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderCustomerEmailSetMessagePayload $data */
                $data = OrderCustomerEmailSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
