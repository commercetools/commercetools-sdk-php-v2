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
 * @extends MessageCollection<CustomerBillingAddressAddedMessage>
 * @method CustomerBillingAddressAddedMessage current()
 * @method CustomerBillingAddressAddedMessage end()
 * @method CustomerBillingAddressAddedMessage at($offset)
 */
class CustomerBillingAddressAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerBillingAddressAddedMessage $value
     * @psalm-param CustomerBillingAddressAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerBillingAddressAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerBillingAddressAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerBillingAddressAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerBillingAddressAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerBillingAddressAddedMessage $data */
                $data = CustomerBillingAddressAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
