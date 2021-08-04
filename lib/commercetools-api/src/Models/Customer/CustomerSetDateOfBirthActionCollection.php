<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Customer\CustomerUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends CustomerUpdateActionCollection<CustomerSetDateOfBirthAction>
 * @method CustomerSetDateOfBirthAction current()
 * @method CustomerSetDateOfBirthAction end()
 * @method CustomerSetDateOfBirthAction at($offset)
 */
class CustomerSetDateOfBirthActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @psalm-assert CustomerSetDateOfBirthAction $value
     * @psalm-param CustomerSetDateOfBirthAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSetDateOfBirthActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSetDateOfBirthAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSetDateOfBirthAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerSetDateOfBirthAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerSetDateOfBirthAction $data */
                $data = CustomerSetDateOfBirthActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
