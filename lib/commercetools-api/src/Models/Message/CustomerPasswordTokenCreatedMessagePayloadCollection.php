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
 * @extends MessagePayloadCollection<CustomerPasswordTokenCreatedMessagePayload>
 * @method CustomerPasswordTokenCreatedMessagePayload current()
 * @method CustomerPasswordTokenCreatedMessagePayload end()
 * @method CustomerPasswordTokenCreatedMessagePayload at($offset)
 */
class CustomerPasswordTokenCreatedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerPasswordTokenCreatedMessagePayload $value
     * @psalm-param CustomerPasswordTokenCreatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerPasswordTokenCreatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerPasswordTokenCreatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerPasswordTokenCreatedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerPasswordTokenCreatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerPasswordTokenCreatedMessagePayload $data */
                $data = CustomerPasswordTokenCreatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
