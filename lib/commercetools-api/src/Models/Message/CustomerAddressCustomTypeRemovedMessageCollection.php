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
 * @extends MessageCollection<CustomerAddressCustomTypeRemovedMessage>
 * @method CustomerAddressCustomTypeRemovedMessage current()
 * @method CustomerAddressCustomTypeRemovedMessage end()
 * @method CustomerAddressCustomTypeRemovedMessage at($offset)
 */
class CustomerAddressCustomTypeRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerAddressCustomTypeRemovedMessage $value
     * @psalm-param CustomerAddressCustomTypeRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerAddressCustomTypeRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerAddressCustomTypeRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerAddressCustomTypeRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerAddressCustomTypeRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerAddressCustomTypeRemovedMessage $data */
                $data = CustomerAddressCustomTypeRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
