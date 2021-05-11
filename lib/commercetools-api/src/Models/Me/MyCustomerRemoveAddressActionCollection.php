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
 * @extends MyCustomerUpdateActionCollection<MyCustomerRemoveAddressAction>
 * @method MyCustomerRemoveAddressAction current()
 * @method MyCustomerRemoveAddressAction at($offset)
 */
class MyCustomerRemoveAddressActionCollection extends MyCustomerUpdateActionCollection
{
    /**
     * @psalm-assert MyCustomerRemoveAddressAction $value
     * @psalm-param MyCustomerRemoveAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCustomerRemoveAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerRemoveAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerRemoveAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCustomerRemoveAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCustomerRemoveAddressAction $data */
                $data = MyCustomerRemoveAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
