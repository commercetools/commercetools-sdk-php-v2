<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomerGroupAssignment>
 * @method CustomerGroupAssignment current()
 * @method CustomerGroupAssignment end()
 * @method CustomerGroupAssignment at($offset)
 */
class CustomerGroupAssignmentCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerGroupAssignment $value
     * @psalm-param CustomerGroupAssignment|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupAssignmentCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupAssignment) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupAssignment
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerGroupAssignment {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupAssignment $data */
                $data = CustomerGroupAssignmentModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
