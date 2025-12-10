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
 * @extends MessagePayloadCollection<CustomerShippingAddressRemovedMessagePayload>
 * @method CustomerShippingAddressRemovedMessagePayload current()
 * @method CustomerShippingAddressRemovedMessagePayload end()
 * @method CustomerShippingAddressRemovedMessagePayload at($offset)
 */
class CustomerShippingAddressRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerShippingAddressRemovedMessagePayload $value
     * @psalm-param CustomerShippingAddressRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerShippingAddressRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerShippingAddressRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerShippingAddressRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerShippingAddressRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerShippingAddressRemovedMessagePayload $data */
                $data = CustomerShippingAddressRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
