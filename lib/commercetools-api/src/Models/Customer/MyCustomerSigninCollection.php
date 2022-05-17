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
 * @extends MapperSequence<MyCustomerSignin>
 * @method MyCustomerSignin current()
 * @method MyCustomerSignin end()
 * @method MyCustomerSignin at($offset)
 */
class MyCustomerSigninCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCustomerSignin $value
     * @psalm-param MyCustomerSignin|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCustomerSigninCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerSignin) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerSignin
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCustomerSignin {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCustomerSignin $data */
                $data = MyCustomerSigninModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
