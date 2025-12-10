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
 * @extends MessagePayloadCollection<CustomerBillingAddressAddedMessagePayload>
 * @method CustomerBillingAddressAddedMessagePayload current()
 * @method CustomerBillingAddressAddedMessagePayload end()
 * @method CustomerBillingAddressAddedMessagePayload at($offset)
 */
class CustomerBillingAddressAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerBillingAddressAddedMessagePayload $value
     * @psalm-param CustomerBillingAddressAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerBillingAddressAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerBillingAddressAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerBillingAddressAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerBillingAddressAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerBillingAddressAddedMessagePayload $data */
                $data = CustomerBillingAddressAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
