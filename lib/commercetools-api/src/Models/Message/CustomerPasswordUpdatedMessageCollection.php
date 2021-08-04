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
 * @extends MessageCollection<CustomerPasswordUpdatedMessage>
 * @method CustomerPasswordUpdatedMessage current()
 * @method CustomerPasswordUpdatedMessage at($offset)
 */
class CustomerPasswordUpdatedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerPasswordUpdatedMessage $value
     * @psalm-param CustomerPasswordUpdatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerPasswordUpdatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerPasswordUpdatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerPasswordUpdatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerPasswordUpdatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerPasswordUpdatedMessage $data */
                $data = CustomerPasswordUpdatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
