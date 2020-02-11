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
 * @extends MapperSequence<MyCustomer>
 * @method MyCustomer current()
 * @method MyCustomer at($offset)
 */
class MyCustomerCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCustomer $value
     * @psalm-param MyCustomer|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCustomerCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomer) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomer
     */
    protected function mapper()
    {
        return function (int $index): ?MyCustomer {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCustomerModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
