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
 * @extends MessageCollection<CustomerGroupCustomFieldAddedMessage>
 * @method CustomerGroupCustomFieldAddedMessage current()
 * @method CustomerGroupCustomFieldAddedMessage end()
 * @method CustomerGroupCustomFieldAddedMessage at($offset)
 */
class CustomerGroupCustomFieldAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerGroupCustomFieldAddedMessage $value
     * @psalm-param CustomerGroupCustomFieldAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupCustomFieldAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupCustomFieldAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupCustomFieldAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerGroupCustomFieldAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupCustomFieldAddedMessage $data */
                $data = CustomerGroupCustomFieldAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
