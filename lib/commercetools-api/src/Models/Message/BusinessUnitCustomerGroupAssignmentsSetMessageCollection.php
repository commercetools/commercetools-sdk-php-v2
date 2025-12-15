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
 * @extends MessageCollection<BusinessUnitCustomerGroupAssignmentsSetMessage>
 * @method BusinessUnitCustomerGroupAssignmentsSetMessage current()
 * @method BusinessUnitCustomerGroupAssignmentsSetMessage end()
 * @method BusinessUnitCustomerGroupAssignmentsSetMessage at($offset)
 */
class BusinessUnitCustomerGroupAssignmentsSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitCustomerGroupAssignmentsSetMessage $value
     * @psalm-param BusinessUnitCustomerGroupAssignmentsSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitCustomerGroupAssignmentsSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitCustomerGroupAssignmentsSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitCustomerGroupAssignmentsSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitCustomerGroupAssignmentsSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitCustomerGroupAssignmentsSetMessage $data */
                $data = BusinessUnitCustomerGroupAssignmentsSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
