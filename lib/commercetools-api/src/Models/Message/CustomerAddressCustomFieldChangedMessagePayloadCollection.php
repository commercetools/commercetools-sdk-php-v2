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
 * @extends MessagePayloadCollection<CustomerAddressCustomFieldChangedMessagePayload>
 * @method CustomerAddressCustomFieldChangedMessagePayload current()
 * @method CustomerAddressCustomFieldChangedMessagePayload end()
 * @method CustomerAddressCustomFieldChangedMessagePayload at($offset)
 */
class CustomerAddressCustomFieldChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerAddressCustomFieldChangedMessagePayload $value
     * @psalm-param CustomerAddressCustomFieldChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerAddressCustomFieldChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerAddressCustomFieldChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerAddressCustomFieldChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerAddressCustomFieldChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerAddressCustomFieldChangedMessagePayload $data */
                $data = CustomerAddressCustomFieldChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
