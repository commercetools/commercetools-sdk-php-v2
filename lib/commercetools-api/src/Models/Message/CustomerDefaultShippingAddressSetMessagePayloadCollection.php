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
 * @extends MessagePayloadCollection<CustomerDefaultShippingAddressSetMessagePayload>
 * @method CustomerDefaultShippingAddressSetMessagePayload current()
 * @method CustomerDefaultShippingAddressSetMessagePayload end()
 * @method CustomerDefaultShippingAddressSetMessagePayload at($offset)
 */
class CustomerDefaultShippingAddressSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerDefaultShippingAddressSetMessagePayload $value
     * @psalm-param CustomerDefaultShippingAddressSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerDefaultShippingAddressSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerDefaultShippingAddressSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerDefaultShippingAddressSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerDefaultShippingAddressSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerDefaultShippingAddressSetMessagePayload $data */
                $data = CustomerDefaultShippingAddressSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
