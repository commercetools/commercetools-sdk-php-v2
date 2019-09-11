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
 * @extends MapperSequence<MyCustomerAddAddressAction>
 *
 * @method MyCustomerAddAddressAction current()
 * @method MyCustomerAddAddressAction at($offset)
 */
class MyCustomerAddAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCustomerAddAddressAction $value
     * @psalm-param MyCustomerAddAddressAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyCustomerAddAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerAddAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerAddAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCustomerAddAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCustomerAddAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
