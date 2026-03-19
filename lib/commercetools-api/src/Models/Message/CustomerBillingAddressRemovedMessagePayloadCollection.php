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
 * @extends MessagePayloadCollection<CustomerBillingAddressRemovedMessagePayload>
 * @method CustomerBillingAddressRemovedMessagePayload current()
 * @method CustomerBillingAddressRemovedMessagePayload end()
 * @method CustomerBillingAddressRemovedMessagePayload at($offset)
 */
class CustomerBillingAddressRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerBillingAddressRemovedMessagePayload $value
     * @psalm-param CustomerBillingAddressRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerBillingAddressRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerBillingAddressRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerBillingAddressRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerBillingAddressRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerBillingAddressRemovedMessagePayload $data */
                $data = CustomerBillingAddressRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
