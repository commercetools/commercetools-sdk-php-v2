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
 * @extends MessagePayloadCollection<CustomerCustomTypeSetMessagePayload>
 * @method CustomerCustomTypeSetMessagePayload current()
 * @method CustomerCustomTypeSetMessagePayload end()
 * @method CustomerCustomTypeSetMessagePayload at($offset)
 */
class CustomerCustomTypeSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerCustomTypeSetMessagePayload $value
     * @psalm-param CustomerCustomTypeSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerCustomTypeSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerCustomTypeSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerCustomTypeSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerCustomTypeSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerCustomTypeSetMessagePayload $data */
                $data = CustomerCustomTypeSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
