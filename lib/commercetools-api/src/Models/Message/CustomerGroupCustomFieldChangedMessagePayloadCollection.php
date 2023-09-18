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
 * @extends MessagePayloadCollection<CustomerGroupCustomFieldChangedMessagePayload>
 * @method CustomerGroupCustomFieldChangedMessagePayload current()
 * @method CustomerGroupCustomFieldChangedMessagePayload end()
 * @method CustomerGroupCustomFieldChangedMessagePayload at($offset)
 */
class CustomerGroupCustomFieldChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerGroupCustomFieldChangedMessagePayload $value
     * @psalm-param CustomerGroupCustomFieldChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupCustomFieldChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupCustomFieldChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupCustomFieldChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerGroupCustomFieldChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupCustomFieldChangedMessagePayload $data */
                $data = CustomerGroupCustomFieldChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
