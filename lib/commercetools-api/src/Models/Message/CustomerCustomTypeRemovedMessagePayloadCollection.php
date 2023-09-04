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
 * @extends MessagePayloadCollection<CustomerCustomTypeRemovedMessagePayload>
 * @method CustomerCustomTypeRemovedMessagePayload current()
 * @method CustomerCustomTypeRemovedMessagePayload end()
 * @method CustomerCustomTypeRemovedMessagePayload at($offset)
 */
class CustomerCustomTypeRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerCustomTypeRemovedMessagePayload $value
     * @psalm-param CustomerCustomTypeRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerCustomTypeRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerCustomTypeRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerCustomTypeRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerCustomTypeRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerCustomTypeRemovedMessagePayload $data */
                $data = CustomerCustomTypeRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
