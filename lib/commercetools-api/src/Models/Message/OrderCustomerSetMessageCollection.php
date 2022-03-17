<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\OrderMessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderMessageCollection<OrderCustomerSetMessage>
 * @method OrderCustomerSetMessage current()
 * @method OrderCustomerSetMessage end()
 * @method OrderCustomerSetMessage at($offset)
 */
class OrderCustomerSetMessageCollection extends OrderMessageCollection
{
    /**
     * @psalm-assert OrderCustomerSetMessage $value
     * @psalm-param OrderCustomerSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCustomerSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomerSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomerSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderCustomerSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderCustomerSetMessage $data */
                $data = OrderCustomerSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
