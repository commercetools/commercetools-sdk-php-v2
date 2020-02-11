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
 * @extends MapperSequence<MyCustomerRemoveBillingAddressIdAction>
 * @method MyCustomerRemoveBillingAddressIdAction current()
 * @method MyCustomerRemoveBillingAddressIdAction at($offset)
 */
class MyCustomerRemoveBillingAddressIdActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCustomerRemoveBillingAddressIdAction $value
     * @psalm-param MyCustomerRemoveBillingAddressIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCustomerRemoveBillingAddressIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerRemoveBillingAddressIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerRemoveBillingAddressIdAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCustomerRemoveBillingAddressIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCustomerRemoveBillingAddressIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
