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
 * @extends MessagePayloadCollection<CustomerAddressChangedMessagePayload>
 * @method CustomerAddressChangedMessagePayload current()
 * @method CustomerAddressChangedMessagePayload at($offset)
 */
class CustomerAddressChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerAddressChangedMessagePayload $value
     * @psalm-param CustomerAddressChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerAddressChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerAddressChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerAddressChangedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerAddressChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerAddressChangedMessagePayload $data */
                $data = CustomerAddressChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
