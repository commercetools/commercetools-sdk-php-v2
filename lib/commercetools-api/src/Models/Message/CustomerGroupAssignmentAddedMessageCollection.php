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
 * @extends MessageCollection<CustomerGroupAssignmentAddedMessage>
 * @method CustomerGroupAssignmentAddedMessage current()
 * @method CustomerGroupAssignmentAddedMessage end()
 * @method CustomerGroupAssignmentAddedMessage at($offset)
 */
class CustomerGroupAssignmentAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerGroupAssignmentAddedMessage $value
     * @psalm-param CustomerGroupAssignmentAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupAssignmentAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupAssignmentAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupAssignmentAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerGroupAssignmentAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupAssignmentAddedMessage $data */
                $data = CustomerGroupAssignmentAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
