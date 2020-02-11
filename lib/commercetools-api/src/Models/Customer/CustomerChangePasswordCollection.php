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
 * @extends MapperSequence<CustomerChangePassword>
 * @method CustomerChangePassword current()
 * @method CustomerChangePassword at($offset)
 */
class CustomerChangePasswordCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerChangePassword $value
     * @psalm-param CustomerChangePassword|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerChangePasswordCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerChangePassword) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerChangePassword
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerChangePassword {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerChangePasswordModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
