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
 * @extends MapperSequence<MyCustomerRemoveShippingAddressIdAction>
 *
 * @method MyCustomerRemoveShippingAddressIdAction current()
 * @method MyCustomerRemoveShippingAddressIdAction at($offset)
 */
class MyCustomerRemoveShippingAddressIdActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCustomerRemoveShippingAddressIdAction $value
     * @psalm-param MyCustomerRemoveShippingAddressIdAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MyCustomerRemoveShippingAddressIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerRemoveShippingAddressIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerRemoveShippingAddressIdAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCustomerRemoveShippingAddressIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCustomerRemoveShippingAddressIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
