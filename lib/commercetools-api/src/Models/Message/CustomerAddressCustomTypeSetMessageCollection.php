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
 * @extends MessageCollection<CustomerAddressCustomTypeSetMessage>
 * @method CustomerAddressCustomTypeSetMessage current()
 * @method CustomerAddressCustomTypeSetMessage end()
 * @method CustomerAddressCustomTypeSetMessage at($offset)
 */
class CustomerAddressCustomTypeSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerAddressCustomTypeSetMessage $value
     * @psalm-param CustomerAddressCustomTypeSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerAddressCustomTypeSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerAddressCustomTypeSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerAddressCustomTypeSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerAddressCustomTypeSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerAddressCustomTypeSetMessage $data */
                $data = CustomerAddressCustomTypeSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
