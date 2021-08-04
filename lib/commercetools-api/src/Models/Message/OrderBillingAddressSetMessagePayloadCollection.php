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
 * @extends MessagePayloadCollection<OrderBillingAddressSetMessagePayload>
 * @method OrderBillingAddressSetMessagePayload current()
 * @method OrderBillingAddressSetMessagePayload at($offset)
 */
class OrderBillingAddressSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert OrderBillingAddressSetMessagePayload $value
     * @psalm-param OrderBillingAddressSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderBillingAddressSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderBillingAddressSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderBillingAddressSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderBillingAddressSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderBillingAddressSetMessagePayload $data */
                $data = OrderBillingAddressSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
