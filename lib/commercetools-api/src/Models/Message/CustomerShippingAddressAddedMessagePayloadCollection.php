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
 * @extends MessagePayloadCollection<CustomerShippingAddressAddedMessagePayload>
 * @method CustomerShippingAddressAddedMessagePayload current()
 * @method CustomerShippingAddressAddedMessagePayload end()
 * @method CustomerShippingAddressAddedMessagePayload at($offset)
 */
class CustomerShippingAddressAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerShippingAddressAddedMessagePayload $value
     * @psalm-param CustomerShippingAddressAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerShippingAddressAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerShippingAddressAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerShippingAddressAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerShippingAddressAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerShippingAddressAddedMessagePayload $data */
                $data = CustomerShippingAddressAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
