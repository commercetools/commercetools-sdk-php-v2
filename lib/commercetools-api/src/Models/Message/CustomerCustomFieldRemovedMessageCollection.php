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
 * @extends MessageCollection<CustomerCustomFieldRemovedMessage>
 * @method CustomerCustomFieldRemovedMessage current()
 * @method CustomerCustomFieldRemovedMessage end()
 * @method CustomerCustomFieldRemovedMessage at($offset)
 */
class CustomerCustomFieldRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerCustomFieldRemovedMessage $value
     * @psalm-param CustomerCustomFieldRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerCustomFieldRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerCustomFieldRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerCustomFieldRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerCustomFieldRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerCustomFieldRemovedMessage $data */
                $data = CustomerCustomFieldRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
