<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<CustomerBillingAddressRemovedMessage>
 * @method CustomerBillingAddressRemovedMessage current()
 * @method CustomerBillingAddressRemovedMessage end()
 * @method CustomerBillingAddressRemovedMessage at($offset)
 */
class CustomerBillingAddressRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerBillingAddressRemovedMessage $value
     * @psalm-param CustomerBillingAddressRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerBillingAddressRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerBillingAddressRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerBillingAddressRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerBillingAddressRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerBillingAddressRemovedMessage $data */
                $data = CustomerBillingAddressRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
