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
 * @extends MapperSequence<CustomerResetPassword>
 *
 * @method CustomerResetPassword current()
 * @method CustomerResetPassword at($offset)
 */
class CustomerResetPasswordCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerResetPassword $value
     * @psalm-param CustomerResetPassword|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CustomerResetPasswordCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerResetPassword) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerResetPassword
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerResetPassword {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerResetPasswordModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
