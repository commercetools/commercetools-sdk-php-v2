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
 * @extends MessageCollection<CustomerGroupAssignmentRemovedMessage>
 * @method CustomerGroupAssignmentRemovedMessage current()
 * @method CustomerGroupAssignmentRemovedMessage end()
 * @method CustomerGroupAssignmentRemovedMessage at($offset)
 */
class CustomerGroupAssignmentRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerGroupAssignmentRemovedMessage $value
     * @psalm-param CustomerGroupAssignmentRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupAssignmentRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupAssignmentRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupAssignmentRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerGroupAssignmentRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupAssignmentRemovedMessage $data */
                $data = CustomerGroupAssignmentRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
