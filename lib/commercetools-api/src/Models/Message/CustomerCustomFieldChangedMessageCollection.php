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
 * @extends MessageCollection<CustomerCustomFieldChangedMessage>
 * @method CustomerCustomFieldChangedMessage current()
 * @method CustomerCustomFieldChangedMessage end()
 * @method CustomerCustomFieldChangedMessage at($offset)
 */
class CustomerCustomFieldChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerCustomFieldChangedMessage $value
     * @psalm-param CustomerCustomFieldChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerCustomFieldChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerCustomFieldChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerCustomFieldChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerCustomFieldChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerCustomFieldChangedMessage $data */
                $data = CustomerCustomFieldChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
