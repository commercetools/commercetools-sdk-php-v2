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
 * @extends MessageCollection<OrderCustomerGroupSetMessage>
 * @method OrderCustomerGroupSetMessage current()
 * @method OrderCustomerGroupSetMessage end()
 * @method OrderCustomerGroupSetMessage at($offset)
 */
class OrderCustomerGroupSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert OrderCustomerGroupSetMessage $value
     * @psalm-param OrderCustomerGroupSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCustomerGroupSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomerGroupSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomerGroupSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderCustomerGroupSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderCustomerGroupSetMessage $data */
                $data = OrderCustomerGroupSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
