<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<CustomerGroupAssignmentsSetMessage>
 * @method CustomerGroupAssignmentsSetMessage current()
 * @method CustomerGroupAssignmentsSetMessage end()
 * @method CustomerGroupAssignmentsSetMessage at($offset)
 */
class CustomerGroupAssignmentsSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerGroupAssignmentsSetMessage $value
     * @psalm-param CustomerGroupAssignmentsSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupAssignmentsSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupAssignmentsSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupAssignmentsSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerGroupAssignmentsSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupAssignmentsSetMessage $data */
                $data = CustomerGroupAssignmentsSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
