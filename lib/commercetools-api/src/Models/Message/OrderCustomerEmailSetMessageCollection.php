<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<OrderCustomerEmailSetMessage>
 * @method OrderCustomerEmailSetMessage current()
 * @method OrderCustomerEmailSetMessage end()
 * @method OrderCustomerEmailSetMessage at($offset)
 */
class OrderCustomerEmailSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert OrderCustomerEmailSetMessage $value
     * @psalm-param OrderCustomerEmailSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCustomerEmailSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomerEmailSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomerEmailSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderCustomerEmailSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderCustomerEmailSetMessage $data */
                $data = OrderCustomerEmailSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
