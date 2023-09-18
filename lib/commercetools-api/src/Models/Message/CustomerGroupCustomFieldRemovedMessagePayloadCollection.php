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
 * @extends MessagePayloadCollection<CustomerGroupCustomFieldRemovedMessagePayload>
 * @method CustomerGroupCustomFieldRemovedMessagePayload current()
 * @method CustomerGroupCustomFieldRemovedMessagePayload end()
 * @method CustomerGroupCustomFieldRemovedMessagePayload at($offset)
 */
class CustomerGroupCustomFieldRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerGroupCustomFieldRemovedMessagePayload $value
     * @psalm-param CustomerGroupCustomFieldRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupCustomFieldRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupCustomFieldRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupCustomFieldRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerGroupCustomFieldRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupCustomFieldRemovedMessagePayload $data */
                $data = CustomerGroupCustomFieldRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
