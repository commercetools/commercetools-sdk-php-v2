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
 * @extends MessageCollection<CustomerGroupCustomTypeRemovedMessage>
 * @method CustomerGroupCustomTypeRemovedMessage current()
 * @method CustomerGroupCustomTypeRemovedMessage end()
 * @method CustomerGroupCustomTypeRemovedMessage at($offset)
 */
class CustomerGroupCustomTypeRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerGroupCustomTypeRemovedMessage $value
     * @psalm-param CustomerGroupCustomTypeRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupCustomTypeRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupCustomTypeRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupCustomTypeRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerGroupCustomTypeRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupCustomTypeRemovedMessage $data */
                $data = CustomerGroupCustomTypeRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
