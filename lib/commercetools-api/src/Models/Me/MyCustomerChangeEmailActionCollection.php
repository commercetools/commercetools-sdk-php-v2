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
 * @extends MyCustomerUpdateActionCollection<MyCustomerChangeEmailAction>
 * @method MyCustomerChangeEmailAction current()
 * @method MyCustomerChangeEmailAction at($offset)
 */
class MyCustomerChangeEmailActionCollection extends MyCustomerUpdateActionCollection
{
    /**
     * @psalm-assert MyCustomerChangeEmailAction $value
     * @psalm-param MyCustomerChangeEmailAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCustomerChangeEmailActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerChangeEmailAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerChangeEmailAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCustomerChangeEmailAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCustomerChangeEmailAction $data */
                $data = MyCustomerChangeEmailActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
