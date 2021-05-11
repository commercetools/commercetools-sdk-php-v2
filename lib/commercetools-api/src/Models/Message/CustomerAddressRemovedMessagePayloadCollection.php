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
 * @extends MessagePayloadCollection<CustomerAddressRemovedMessagePayload>
 * @method CustomerAddressRemovedMessagePayload current()
 * @method CustomerAddressRemovedMessagePayload at($offset)
 */
class CustomerAddressRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerAddressRemovedMessagePayload $value
     * @psalm-param CustomerAddressRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerAddressRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerAddressRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerAddressRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerAddressRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerAddressRemovedMessagePayload $data */
                $data = CustomerAddressRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
