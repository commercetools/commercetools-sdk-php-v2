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
 * @extends MessagePayloadCollection<BusinessUnitCustomerGroupAssignmentsSetMessagePayload>
 * @method BusinessUnitCustomerGroupAssignmentsSetMessagePayload current()
 * @method BusinessUnitCustomerGroupAssignmentsSetMessagePayload end()
 * @method BusinessUnitCustomerGroupAssignmentsSetMessagePayload at($offset)
 */
class BusinessUnitCustomerGroupAssignmentsSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitCustomerGroupAssignmentsSetMessagePayload $value
     * @psalm-param BusinessUnitCustomerGroupAssignmentsSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitCustomerGroupAssignmentsSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitCustomerGroupAssignmentsSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitCustomerGroupAssignmentsSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitCustomerGroupAssignmentsSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitCustomerGroupAssignmentsSetMessagePayload $data */
                $data = BusinessUnitCustomerGroupAssignmentsSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
