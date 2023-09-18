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
 * @extends MessagePayloadCollection<CustomerGroupCustomTypeSetMessagePayload>
 * @method CustomerGroupCustomTypeSetMessagePayload current()
 * @method CustomerGroupCustomTypeSetMessagePayload end()
 * @method CustomerGroupCustomTypeSetMessagePayload at($offset)
 */
class CustomerGroupCustomTypeSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerGroupCustomTypeSetMessagePayload $value
     * @psalm-param CustomerGroupCustomTypeSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupCustomTypeSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupCustomTypeSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupCustomTypeSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerGroupCustomTypeSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupCustomTypeSetMessagePayload $data */
                $data = CustomerGroupCustomTypeSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
