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
 * @extends MessageCollection<CustomerShippingAddressRemovedMessage>
 * @method CustomerShippingAddressRemovedMessage current()
 * @method CustomerShippingAddressRemovedMessage end()
 * @method CustomerShippingAddressRemovedMessage at($offset)
 */
class CustomerShippingAddressRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerShippingAddressRemovedMessage $value
     * @psalm-param CustomerShippingAddressRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerShippingAddressRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerShippingAddressRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerShippingAddressRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerShippingAddressRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerShippingAddressRemovedMessage $data */
                $data = CustomerShippingAddressRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
