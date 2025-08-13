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
 * @extends MessagePayloadCollection<CustomerStoresSetMessagePayload>
 * @method CustomerStoresSetMessagePayload current()
 * @method CustomerStoresSetMessagePayload end()
 * @method CustomerStoresSetMessagePayload at($offset)
 */
class CustomerStoresSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerStoresSetMessagePayload $value
     * @psalm-param CustomerStoresSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerStoresSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerStoresSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerStoresSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerStoresSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerStoresSetMessagePayload $data */
                $data = CustomerStoresSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
