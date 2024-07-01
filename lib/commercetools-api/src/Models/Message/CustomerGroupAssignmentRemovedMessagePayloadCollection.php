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
 * @extends MessagePayloadCollection<CustomerGroupAssignmentRemovedMessagePayload>
 * @method CustomerGroupAssignmentRemovedMessagePayload current()
 * @method CustomerGroupAssignmentRemovedMessagePayload end()
 * @method CustomerGroupAssignmentRemovedMessagePayload at($offset)
 */
class CustomerGroupAssignmentRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerGroupAssignmentRemovedMessagePayload $value
     * @psalm-param CustomerGroupAssignmentRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupAssignmentRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupAssignmentRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupAssignmentRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerGroupAssignmentRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupAssignmentRemovedMessagePayload $data */
                $data = CustomerGroupAssignmentRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
