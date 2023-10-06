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
 * @extends MessageCollection<CustomerPasswordTokenCreatedMessage>
 * @method CustomerPasswordTokenCreatedMessage current()
 * @method CustomerPasswordTokenCreatedMessage end()
 * @method CustomerPasswordTokenCreatedMessage at($offset)
 */
class CustomerPasswordTokenCreatedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerPasswordTokenCreatedMessage $value
     * @psalm-param CustomerPasswordTokenCreatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerPasswordTokenCreatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerPasswordTokenCreatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerPasswordTokenCreatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerPasswordTokenCreatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerPasswordTokenCreatedMessage $data */
                $data = CustomerPasswordTokenCreatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
