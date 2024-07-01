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
 * @extends MapperSequence<CustomerGroupAssignmentDraft>
 * @method CustomerGroupAssignmentDraft current()
 * @method CustomerGroupAssignmentDraft end()
 * @method CustomerGroupAssignmentDraft at($offset)
 */
class CustomerGroupAssignmentDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerGroupAssignmentDraft $value
     * @psalm-param CustomerGroupAssignmentDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupAssignmentDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupAssignmentDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupAssignmentDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerGroupAssignmentDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupAssignmentDraft $data */
                $data = CustomerGroupAssignmentDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
