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
 * @extends MessagePayloadCollection<BusinessUnitCustomerGroupAssignmentAddedMessagePayload>
 * @method BusinessUnitCustomerGroupAssignmentAddedMessagePayload current()
 * @method BusinessUnitCustomerGroupAssignmentAddedMessagePayload end()
 * @method BusinessUnitCustomerGroupAssignmentAddedMessagePayload at($offset)
 */
class BusinessUnitCustomerGroupAssignmentAddedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitCustomerGroupAssignmentAddedMessagePayload $value
     * @psalm-param BusinessUnitCustomerGroupAssignmentAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitCustomerGroupAssignmentAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitCustomerGroupAssignmentAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitCustomerGroupAssignmentAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitCustomerGroupAssignmentAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitCustomerGroupAssignmentAddedMessagePayload $data */
                $data = BusinessUnitCustomerGroupAssignmentAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
