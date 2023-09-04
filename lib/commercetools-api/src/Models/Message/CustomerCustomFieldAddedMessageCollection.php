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
 * @extends MessageCollection<CustomerCustomFieldAddedMessage>
 * @method CustomerCustomFieldAddedMessage current()
 * @method CustomerCustomFieldAddedMessage end()
 * @method CustomerCustomFieldAddedMessage at($offset)
 */
class CustomerCustomFieldAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerCustomFieldAddedMessage $value
     * @psalm-param CustomerCustomFieldAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerCustomFieldAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerCustomFieldAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerCustomFieldAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerCustomFieldAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerCustomFieldAddedMessage $data */
                $data = CustomerCustomFieldAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
