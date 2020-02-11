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
 * @extends MapperSequence<CustomerSignin>
 * @method CustomerSignin current()
 * @method CustomerSignin at($offset)
 */
class CustomerSigninCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerSignin $value
     * @psalm-param CustomerSignin|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerSigninCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerSignin) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerSignin
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerSignin {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerSigninModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
