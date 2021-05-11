<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Me\MyCustomerUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MyCustomerUpdateActionCollection<MyCustomerSetDefaultBillingAddressAction>
 * @method MyCustomerSetDefaultBillingAddressAction current()
 * @method MyCustomerSetDefaultBillingAddressAction at($offset)
 */
class MyCustomerSetDefaultBillingAddressActionCollection extends MyCustomerUpdateActionCollection
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
                /** @var MyCustomerSetDefaultBillingAddressAction $data */
                $data = MyCustomerSetDefaultBillingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
