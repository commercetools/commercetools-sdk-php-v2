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
 * @extends MessageCollection<CustomerGroupCustomFieldChangedMessage>
 * @method CustomerGroupCustomFieldChangedMessage current()
 * @method CustomerGroupCustomFieldChangedMessage end()
 * @method CustomerGroupCustomFieldChangedMessage at($offset)
 */
class CustomerGroupCustomFieldChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerGroupCustomFieldChangedMessage $value
     * @psalm-param CustomerGroupCustomFieldChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupCustomFieldChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupCustomFieldChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupCustomFieldChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerGroupCustomFieldChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupCustomFieldChangedMessage $data */
                $data = CustomerGroupCustomFieldChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
