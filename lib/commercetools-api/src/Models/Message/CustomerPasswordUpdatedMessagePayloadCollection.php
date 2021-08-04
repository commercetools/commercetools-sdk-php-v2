<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<CustomerPasswordUpdatedMessagePayload>
 * @method CustomerPasswordUpdatedMessagePayload current()
 * @method CustomerPasswordUpdatedMessagePayload at($offset)
 */
class CustomerPasswordUpdatedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerPasswordUpdatedMessagePayload $value
     * @psalm-param CustomerPasswordUpdatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerPasswordUpdatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerPasswordUpdatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerPasswordUpdatedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerPasswordUpdatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerPasswordUpdatedMessagePayload $data */
                $data = CustomerPasswordUpdatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
