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
 * @extends MessageCollection<CustomerCreatedMessage>
 * @method CustomerCreatedMessage current()
 * @method CustomerCreatedMessage end()
 * @method CustomerCreatedMessage at($offset)
 */
class CustomerCreatedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerCreatedMessage $value
     * @psalm-param CustomerCreatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerCreatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerCreatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerCreatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerCreatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerCreatedMessage $data */
                $data = CustomerCreatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
