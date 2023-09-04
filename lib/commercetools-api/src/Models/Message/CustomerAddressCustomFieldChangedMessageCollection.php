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
 * @extends MessageCollection<CustomerAddressCustomFieldChangedMessage>
 * @method CustomerAddressCustomFieldChangedMessage current()
 * @method CustomerAddressCustomFieldChangedMessage end()
 * @method CustomerAddressCustomFieldChangedMessage at($offset)
 */
class CustomerAddressCustomFieldChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerAddressCustomFieldChangedMessage $value
     * @psalm-param CustomerAddressCustomFieldChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerAddressCustomFieldChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerAddressCustomFieldChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerAddressCustomFieldChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerAddressCustomFieldChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerAddressCustomFieldChangedMessage $data */
                $data = CustomerAddressCustomFieldChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
