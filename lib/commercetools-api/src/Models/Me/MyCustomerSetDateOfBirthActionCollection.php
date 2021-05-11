<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Me\MyCustomerUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MyCustomerUpdateActionCollection<MyCustomerSetDateOfBirthAction>
 * @method MyCustomerSetDateOfBirthAction current()
 * @method MyCustomerSetDateOfBirthAction at($offset)
 */
class MyCustomerSetDateOfBirthActionCollection extends MyCustomerUpdateActionCollection
{
    /**
     * @psalm-assert MyCustomerSetDateOfBirthAction $value
     * @psalm-param MyCustomerSetDateOfBirthAction|stdClass $value
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
                /** @var MyCustomerSetDateOfBirthAction $data */
                $data = MyCustomerSetDateOfBirthActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
