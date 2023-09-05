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
 * @extends MessagePayloadCollection<CustomerAddressCustomTypeSetMessagePayload>
 * @method CustomerAddressCustomTypeSetMessagePayload current()
 * @method CustomerAddressCustomTypeSetMessagePayload end()
 * @method CustomerAddressCustomTypeSetMessagePayload at($offset)
 */
class CustomerAddressCustomTypeSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerAddressCustomTypeSetMessagePayload $value
     * @psalm-param CustomerAddressCustomTypeSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerAddressCustomTypeSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerAddressCustomTypeSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerAddressCustomTypeSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerAddressCustomTypeSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerAddressCustomTypeSetMessagePayload $data */
                $data = CustomerAddressCustomTypeSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
