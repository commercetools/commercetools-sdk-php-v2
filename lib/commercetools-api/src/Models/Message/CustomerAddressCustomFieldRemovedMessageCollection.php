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
 * @extends MessageCollection<CustomerAddressCustomFieldRemovedMessage>
 * @method CustomerAddressCustomFieldRemovedMessage current()
 * @method CustomerAddressCustomFieldRemovedMessage end()
 * @method CustomerAddressCustomFieldRemovedMessage at($offset)
 */
class CustomerAddressCustomFieldRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerAddressCustomFieldRemovedMessage $value
     * @psalm-param CustomerAddressCustomFieldRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerAddressCustomFieldRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerAddressCustomFieldRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerAddressCustomFieldRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerAddressCustomFieldRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerAddressCustomFieldRemovedMessage $data */
                $data = CustomerAddressCustomFieldRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
