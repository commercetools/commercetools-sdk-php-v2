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
 * @extends MyCustomerUpdateActionCollection<MyCustomerChangeAddressAction>
 * @method MyCustomerChangeAddressAction current()
 * @method MyCustomerChangeAddressAction at($offset)
 */
class MyCustomerChangeAddressActionCollection extends MyCustomerUpdateActionCollection
{
    /**
     * @psalm-assert MyCustomerChangeAddressAction $value
     * @psalm-param MyCustomerChangeAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCustomerChangeAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerChangeAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerChangeAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCustomerChangeAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCustomerChangeAddressAction $data */
                $data = MyCustomerChangeAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
