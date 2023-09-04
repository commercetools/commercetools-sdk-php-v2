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
 * @extends MessagePayloadCollection<CustomerAddressCustomTypeRemovedMessagePayload>
 * @method CustomerAddressCustomTypeRemovedMessagePayload current()
 * @method CustomerAddressCustomTypeRemovedMessagePayload end()
 * @method CustomerAddressCustomTypeRemovedMessagePayload at($offset)
 */
class CustomerAddressCustomTypeRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerAddressCustomTypeRemovedMessagePayload $value
     * @psalm-param CustomerAddressCustomTypeRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerAddressCustomTypeRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerAddressCustomTypeRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerAddressCustomTypeRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerAddressCustomTypeRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerAddressCustomTypeRemovedMessagePayload $data */
                $data = CustomerAddressCustomTypeRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
