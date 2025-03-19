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
 * @extends MessagePayloadCollection<CustomerGroupAssignmentAddedMessagePayload>
 * @method CustomerGroupAssignmentAddedMessagePayload current()
 * @method CustomerGroupAssignmentAddedMessagePayload end()
 * @method CustomerGroupAssignmentAddedMessagePayload at($offset)
 */
class CustomerGroupAssignmentAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerGroupAssignmentAddedMessagePayload $value
     * @psalm-param CustomerGroupAssignmentAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupAssignmentAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupAssignmentAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupAssignmentAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerGroupAssignmentAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupAssignmentAddedMessagePayload $data */
                $data = CustomerGroupAssignmentAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
