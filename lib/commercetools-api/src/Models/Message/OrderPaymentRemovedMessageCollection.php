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
 * @extends MessageCollection<OrderPaymentRemovedMessage>
 * @method OrderPaymentRemovedMessage current()
 * @method OrderPaymentRemovedMessage end()
 * @method OrderPaymentRemovedMessage at($offset)
 */
class OrderPaymentRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert OrderPaymentRemovedMessage $value
     * @psalm-param OrderPaymentRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderPaymentRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderPaymentRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderPaymentRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderPaymentRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderPaymentRemovedMessage $data */
                $data = OrderPaymentRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
