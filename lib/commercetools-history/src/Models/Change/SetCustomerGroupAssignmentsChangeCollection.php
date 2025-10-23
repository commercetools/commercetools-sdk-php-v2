<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<SetCustomerGroupAssignmentsChange>
 * @method SetCustomerGroupAssignmentsChange current()
 * @method SetCustomerGroupAssignmentsChange end()
 * @method SetCustomerGroupAssignmentsChange at($offset)
 */
class SetCustomerGroupAssignmentsChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetCustomerGroupAssignmentsChange $value
     * @psalm-param SetCustomerGroupAssignmentsChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomerGroupAssignmentsChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomerGroupAssignmentsChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomerGroupAssignmentsChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetCustomerGroupAssignmentsChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetCustomerGroupAssignmentsChange $data */
                $data = SetCustomerGroupAssignmentsChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
