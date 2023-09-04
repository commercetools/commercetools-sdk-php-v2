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
 * @extends MessagePayloadCollection<CustomerMessagePayload>
 * @method CustomerMessagePayload current()
 * @method CustomerMessagePayload end()
 * @method CustomerMessagePayload at($offset)
 */
class CustomerMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerMessagePayload $value
     * @psalm-param CustomerMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerMessagePayload $data */
                $data = CustomerMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
