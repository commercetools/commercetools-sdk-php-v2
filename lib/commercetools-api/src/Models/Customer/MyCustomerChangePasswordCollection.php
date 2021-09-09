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
 * @extends MapperSequence<MyCustomerChangePassword>
 * @method MyCustomerChangePassword current()
 * @method MyCustomerChangePassword end()
 * @method MyCustomerChangePassword at($offset)
 */
class MyCustomerChangePasswordCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCustomerChangePassword $value
     * @psalm-param MyCustomerChangePassword|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCustomerChangePasswordCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerChangePassword) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerChangePassword
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCustomerChangePassword {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCustomerChangePassword $data */
                $data = MyCustomerChangePasswordModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
