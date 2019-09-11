<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MyCustomerSetDateOfBirthAction>
 *
 * @method MyCustomerSetDateOfBirthAction current()
 * @method MyCustomerSetDateOfBirthAction at($offset)
 */
class MyCustomerSetDateOfBirthActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCustomerSetDateOfBirthAction $value
     * @psalm-param MyCustomerSetDateOfBirthAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyCustomerSetDateOfBirthActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerSetDateOfBirthAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerSetDateOfBirthAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCustomerSetDateOfBirthAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCustomerSetDateOfBirthActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
