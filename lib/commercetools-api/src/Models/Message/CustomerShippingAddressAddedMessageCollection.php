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
 * @extends MessageCollection<CustomerShippingAddressAddedMessage>
 * @method CustomerShippingAddressAddedMessage current()
 * @method CustomerShippingAddressAddedMessage end()
 * @method CustomerShippingAddressAddedMessage at($offset)
 */
class CustomerShippingAddressAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerShippingAddressAddedMessage $value
     * @psalm-param CustomerShippingAddressAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerShippingAddressAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerShippingAddressAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerShippingAddressAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerShippingAddressAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerShippingAddressAddedMessage $data */
                $data = CustomerShippingAddressAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
