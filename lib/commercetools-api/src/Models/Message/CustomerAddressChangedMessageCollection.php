<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomerAddressChangedMessage>
 *
 * @method CustomerAddressChangedMessage current()
 * @method CustomerAddressChangedMessage at($offset)
 */
class CustomerAddressChangedMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerAddressChangedMessage $value
     * @psalm-param CustomerAddressChangedMessage|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CustomerAddressChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerAddressChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerAddressChangedMessage
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerAddressChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerAddressChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
