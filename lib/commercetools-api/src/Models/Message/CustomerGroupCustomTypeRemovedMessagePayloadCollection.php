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
 * @extends MessagePayloadCollection<CustomerGroupCustomTypeRemovedMessagePayload>
 * @method CustomerGroupCustomTypeRemovedMessagePayload current()
 * @method CustomerGroupCustomTypeRemovedMessagePayload end()
 * @method CustomerGroupCustomTypeRemovedMessagePayload at($offset)
 */
class CustomerGroupCustomTypeRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerGroupCustomTypeRemovedMessagePayload $value
     * @psalm-param CustomerGroupCustomTypeRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupCustomTypeRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupCustomTypeRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupCustomTypeRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerGroupCustomTypeRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupCustomTypeRemovedMessagePayload $data */
                $data = CustomerGroupCustomTypeRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
