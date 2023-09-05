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
 * @extends MessagePayloadCollection<CustomerAddressCustomFieldRemovedMessagePayload>
 * @method CustomerAddressCustomFieldRemovedMessagePayload current()
 * @method CustomerAddressCustomFieldRemovedMessagePayload end()
 * @method CustomerAddressCustomFieldRemovedMessagePayload at($offset)
 */
class CustomerAddressCustomFieldRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerAddressCustomFieldRemovedMessagePayload $value
     * @psalm-param CustomerAddressCustomFieldRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerAddressCustomFieldRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerAddressCustomFieldRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerAddressCustomFieldRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerAddressCustomFieldRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerAddressCustomFieldRemovedMessagePayload $data */
                $data = CustomerAddressCustomFieldRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
