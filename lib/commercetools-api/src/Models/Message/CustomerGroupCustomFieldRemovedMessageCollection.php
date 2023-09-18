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
 * @extends MessageCollection<CustomerGroupCustomFieldRemovedMessage>
 * @method CustomerGroupCustomFieldRemovedMessage current()
 * @method CustomerGroupCustomFieldRemovedMessage end()
 * @method CustomerGroupCustomFieldRemovedMessage at($offset)
 */
class CustomerGroupCustomFieldRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerGroupCustomFieldRemovedMessage $value
     * @psalm-param CustomerGroupCustomFieldRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupCustomFieldRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupCustomFieldRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupCustomFieldRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerGroupCustomFieldRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupCustomFieldRemovedMessage $data */
                $data = CustomerGroupCustomFieldRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
