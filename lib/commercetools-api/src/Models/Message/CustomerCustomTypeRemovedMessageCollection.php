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
 * @extends MessageCollection<CustomerCustomTypeRemovedMessage>
 * @method CustomerCustomTypeRemovedMessage current()
 * @method CustomerCustomTypeRemovedMessage end()
 * @method CustomerCustomTypeRemovedMessage at($offset)
 */
class CustomerCustomTypeRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerCustomTypeRemovedMessage $value
     * @psalm-param CustomerCustomTypeRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerCustomTypeRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerCustomTypeRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerCustomTypeRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerCustomTypeRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerCustomTypeRemovedMessage $data */
                $data = CustomerCustomTypeRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
