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
 * @extends MessageCollection<BusinessUnitCustomerGroupAssignmentRemovedMessage>
 * @method BusinessUnitCustomerGroupAssignmentRemovedMessage current()
 * @method BusinessUnitCustomerGroupAssignmentRemovedMessage end()
 * @method BusinessUnitCustomerGroupAssignmentRemovedMessage at($offset)
 */
class BusinessUnitCustomerGroupAssignmentRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitCustomerGroupAssignmentRemovedMessage $value
     * @psalm-param BusinessUnitCustomerGroupAssignmentRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitCustomerGroupAssignmentRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitCustomerGroupAssignmentRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitCustomerGroupAssignmentRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitCustomerGroupAssignmentRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitCustomerGroupAssignmentRemovedMessage $data */
                $data = BusinessUnitCustomerGroupAssignmentRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
