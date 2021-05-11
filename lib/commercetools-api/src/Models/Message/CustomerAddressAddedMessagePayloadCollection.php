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
 * @extends MessagePayloadCollection<CustomerAddressAddedMessagePayload>
 * @method CustomerAddressAddedMessagePayload current()
 * @method CustomerAddressAddedMessagePayload at($offset)
 */
class CustomerAddressAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerAddressAddedMessagePayload $value
     * @psalm-param CustomerAddressAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerAddressAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerAddressAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerAddressAddedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerAddressAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerAddressAddedMessagePayload $data */
                $data = CustomerAddressAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
