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
 * @extends MessageCollection<CustomerAddressRemovedMessage>
 * @method CustomerAddressRemovedMessage current()
 * @method CustomerAddressRemovedMessage end()
 * @method CustomerAddressRemovedMessage at($offset)
 */
class CustomerAddressRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerAddressRemovedMessage $value
     * @psalm-param CustomerAddressRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerAddressRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerAddressRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerAddressRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerAddressRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerAddressRemovedMessage $data */
                $data = CustomerAddressRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
