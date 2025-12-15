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
 * @extends MessageCollection<BusinessUnitCustomerGroupAssignmentAddedMessage>
 * @method BusinessUnitCustomerGroupAssignmentAddedMessage current()
 * @method BusinessUnitCustomerGroupAssignmentAddedMessage end()
 * @method BusinessUnitCustomerGroupAssignmentAddedMessage at($offset)
 */
class BusinessUnitCustomerGroupAssignmentAddedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitCustomerGroupAssignmentAddedMessage $value
     * @psalm-param BusinessUnitCustomerGroupAssignmentAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitCustomerGroupAssignmentAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitCustomerGroupAssignmentAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitCustomerGroupAssignmentAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitCustomerGroupAssignmentAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitCustomerGroupAssignmentAddedMessage $data */
                $data = BusinessUnitCustomerGroupAssignmentAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
