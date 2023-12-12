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
 * @extends MessagePayloadCollection<CustomerGroupCustomFieldAddedMessagePayload>
 * @method CustomerGroupCustomFieldAddedMessagePayload current()
 * @method CustomerGroupCustomFieldAddedMessagePayload end()
 * @method CustomerGroupCustomFieldAddedMessagePayload at($offset)
 */
class CustomerGroupCustomFieldAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerGroupCustomFieldAddedMessagePayload $value
     * @psalm-param CustomerGroupCustomFieldAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupCustomFieldAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupCustomFieldAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupCustomFieldAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerGroupCustomFieldAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupCustomFieldAddedMessagePayload $data */
                $data = CustomerGroupCustomFieldAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
