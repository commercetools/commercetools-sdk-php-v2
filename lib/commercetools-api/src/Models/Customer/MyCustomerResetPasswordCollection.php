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
 * @extends MapperSequence<MyCustomerResetPassword>
 * @method MyCustomerResetPassword current()
 * @method MyCustomerResetPassword end()
 * @method MyCustomerResetPassword at($offset)
 */
class MyCustomerResetPasswordCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCustomerResetPassword $value
     * @psalm-param MyCustomerResetPassword|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCustomerResetPasswordCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerResetPassword) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerResetPassword
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCustomerResetPassword {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCustomerResetPassword $data */
                $data = MyCustomerResetPasswordModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
