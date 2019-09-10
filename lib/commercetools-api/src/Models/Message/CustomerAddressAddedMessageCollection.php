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
 * @extends MapperSequence<CustomerAddressAddedMessage>
 *
 * @method CustomerAddressAddedMessage current()
 * @method CustomerAddressAddedMessage at($offset)
 */
class CustomerAddressAddedMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerAddressAddedMessage $value
     * @psalm-param CustomerAddressAddedMessage|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CustomerAddressAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerAddressAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerAddressAddedMessage
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerAddressAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerAddressAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
