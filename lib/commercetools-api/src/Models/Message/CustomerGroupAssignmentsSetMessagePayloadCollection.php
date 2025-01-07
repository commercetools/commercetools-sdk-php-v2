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
 * @extends MessagePayloadCollection<CustomerGroupAssignmentsSetMessagePayload>
 * @method CustomerGroupAssignmentsSetMessagePayload current()
 * @method CustomerGroupAssignmentsSetMessagePayload end()
 * @method CustomerGroupAssignmentsSetMessagePayload at($offset)
 */
class CustomerGroupAssignmentsSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CustomerGroupAssignmentsSetMessagePayload $value
     * @psalm-param CustomerGroupAssignmentsSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupAssignmentsSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupAssignmentsSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupAssignmentsSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerGroupAssignmentsSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupAssignmentsSetMessagePayload $data */
                $data = CustomerGroupAssignmentsSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
