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
 * @extends MessagePayloadCollection<CustomerCustomFieldRemovedMessagePayload>
 * @method CustomerCustomFieldRemovedMessagePayload current()
 * @method CustomerCustomFieldRemovedMessagePayload end()
 * @method CustomerCustomFieldRemovedMessagePayload at($offset)
 */
class CustomerCustomFieldRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerCustomFieldRemovedMessagePayload $value
     * @psalm-param CustomerCustomFieldRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerCustomFieldRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerCustomFieldRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerCustomFieldRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerCustomFieldRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerCustomFieldRemovedMessagePayload $data */
                $data = CustomerCustomFieldRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
