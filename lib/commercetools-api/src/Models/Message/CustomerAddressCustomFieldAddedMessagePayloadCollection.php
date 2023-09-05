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
 * @extends MessagePayloadCollection<CustomerAddressCustomFieldAddedMessagePayload>
 * @method CustomerAddressCustomFieldAddedMessagePayload current()
 * @method CustomerAddressCustomFieldAddedMessagePayload end()
 * @method CustomerAddressCustomFieldAddedMessagePayload at($offset)
 */
class CustomerAddressCustomFieldAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerAddressCustomFieldAddedMessagePayload $value
     * @psalm-param CustomerAddressCustomFieldAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerAddressCustomFieldAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerAddressCustomFieldAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerAddressCustomFieldAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerAddressCustomFieldAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerAddressCustomFieldAddedMessagePayload $data */
                $data = CustomerAddressCustomFieldAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
