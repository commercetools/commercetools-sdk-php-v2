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
 * @extends MessagePayloadCollection<BusinessUnitCustomerGroupAssignmentRemovedMessagePayload>
 * @method BusinessUnitCustomerGroupAssignmentRemovedMessagePayload current()
 * @method BusinessUnitCustomerGroupAssignmentRemovedMessagePayload end()
 * @method BusinessUnitCustomerGroupAssignmentRemovedMessagePayload at($offset)
 */
class BusinessUnitCustomerGroupAssignmentRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitCustomerGroupAssignmentRemovedMessagePayload $value
     * @psalm-param BusinessUnitCustomerGroupAssignmentRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitCustomerGroupAssignmentRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitCustomerGroupAssignmentRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitCustomerGroupAssignmentRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitCustomerGroupAssignmentRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitCustomerGroupAssignmentRemovedMessagePayload $data */
                $data = BusinessUnitCustomerGroupAssignmentRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
