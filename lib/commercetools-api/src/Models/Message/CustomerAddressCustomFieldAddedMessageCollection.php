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
 * @extends MessageCollection<CustomerAddressCustomFieldAddedMessage>
 * @method CustomerAddressCustomFieldAddedMessage current()
 * @method CustomerAddressCustomFieldAddedMessage end()
 * @method CustomerAddressCustomFieldAddedMessage at($offset)
 */
class CustomerAddressCustomFieldAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerAddressCustomFieldAddedMessage $value
     * @psalm-param CustomerAddressCustomFieldAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerAddressCustomFieldAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerAddressCustomFieldAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerAddressCustomFieldAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerAddressCustomFieldAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerAddressCustomFieldAddedMessage $data */
                $data = CustomerAddressCustomFieldAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
