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
 * @extends MapperSequence<MyCustomerEmailVerify>
 * @method MyCustomerEmailVerify current()
 * @method MyCustomerEmailVerify end()
 * @method MyCustomerEmailVerify at($offset)
 */
class MyCustomerEmailVerifyCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCustomerEmailVerify $value
     * @psalm-param MyCustomerEmailVerify|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCustomerEmailVerifyCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerEmailVerify) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerEmailVerify
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCustomerEmailVerify {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCustomerEmailVerify $data */
                $data = MyCustomerEmailVerifyModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
