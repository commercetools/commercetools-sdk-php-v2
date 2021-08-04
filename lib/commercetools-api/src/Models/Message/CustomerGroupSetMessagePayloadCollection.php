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
 * @extends MessagePayloadCollection<CustomerGroupSetMessagePayload>
 * @method CustomerGroupSetMessagePayload current()
 * @method CustomerGroupSetMessagePayload end()
 * @method CustomerGroupSetMessagePayload at($offset)
 */
class CustomerGroupSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerGroupSetMessagePayload $value
     * @psalm-param CustomerGroupSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerGroupSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupSetMessagePayload $data */
                $data = CustomerGroupSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
