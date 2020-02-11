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
 * @extends MapperSequence<MyCustomerSetDefaultBillingAddressAction>
 * @method MyCustomerSetDefaultBillingAddressAction current()
 * @method MyCustomerSetDefaultBillingAddressAction at($offset)
 */
class MyCustomerSetDefaultBillingAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCustomerSetDefaultBillingAddressAction $value
     * @psalm-param MyCustomerSetDefaultBillingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCustomerSetDefaultBillingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerSetDefaultBillingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerSetDefaultBillingAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCustomerSetDefaultBillingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCustomerSetDefaultBillingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
