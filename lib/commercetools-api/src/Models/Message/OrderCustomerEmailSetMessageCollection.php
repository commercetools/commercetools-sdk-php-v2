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
 * @extends MapperSequence<OrderCustomerEmailSetMessage>
 *
 * @method OrderCustomerEmailSetMessage current()
 * @method OrderCustomerEmailSetMessage at($offset)
 */
class OrderCustomerEmailSetMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderCustomerEmailSetMessage $value
     * @psalm-param OrderCustomerEmailSetMessage|stdClass $value
     *
     * @param mixed $value
     *
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
        return function (int $index): ?OrderCustomerEmailSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderCustomerEmailSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
