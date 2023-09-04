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
 * @extends MessagePayloadCollection<CustomerCustomFieldChangedMessagePayload>
 * @method CustomerCustomFieldChangedMessagePayload current()
 * @method CustomerCustomFieldChangedMessagePayload end()
 * @method CustomerCustomFieldChangedMessagePayload at($offset)
 */
class CustomerCustomFieldChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerCustomFieldChangedMessagePayload $value
     * @psalm-param CustomerCustomFieldChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerCustomFieldChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerCustomFieldChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerCustomFieldChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerCustomFieldChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerCustomFieldChangedMessagePayload $data */
                $data = CustomerCustomFieldChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
