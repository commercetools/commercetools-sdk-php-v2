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
 * @extends MapperSequence<CustomerSetDateOfBirthAction>
 *
 * @method CustomerSetDateOfBirthAction current()
 * @method CustomerSetDateOfBirthAction at($offset)
 */
class CustomerSetDateOfBirthActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerSetDateOfBirthAction $value
     * @psalm-param CustomerSetDateOfBirthAction|stdClass $value
     *
     * @param mixed $value
     *
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
        return function (int $index): ?CustomerSetDateOfBirthAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerSetDateOfBirthActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
