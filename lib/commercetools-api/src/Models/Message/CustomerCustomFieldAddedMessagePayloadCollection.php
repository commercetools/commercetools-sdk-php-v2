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
 * @extends MessagePayloadCollection<CustomerCustomFieldAddedMessagePayload>
 * @method CustomerCustomFieldAddedMessagePayload current()
 * @method CustomerCustomFieldAddedMessagePayload end()
 * @method CustomerCustomFieldAddedMessagePayload at($offset)
 */
class CustomerCustomFieldAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerCustomFieldAddedMessagePayload $value
     * @psalm-param CustomerCustomFieldAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerCustomFieldAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerCustomFieldAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerCustomFieldAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerCustomFieldAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerCustomFieldAddedMessagePayload $data */
                $data = CustomerCustomFieldAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
