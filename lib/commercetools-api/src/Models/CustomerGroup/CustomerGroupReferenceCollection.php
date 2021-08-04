<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<CustomerGroupReference>
 * @method CustomerGroupReference current()
 * @method CustomerGroupReference end()
 * @method CustomerGroupReference at($offset)
 */
class CustomerGroupReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert CustomerGroupReference $value
     * @psalm-param CustomerGroupReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerGroupReference
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerGroupReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerGroupReference $data */
                $data = CustomerGroupReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
