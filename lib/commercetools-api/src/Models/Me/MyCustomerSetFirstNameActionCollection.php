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
 * @extends MyCustomerUpdateActionCollection<MyCustomerSetFirstNameAction>
 * @method MyCustomerSetFirstNameAction current()
 * @method MyCustomerSetFirstNameAction at($offset)
 */
class MyCustomerSetFirstNameActionCollection extends MyCustomerUpdateActionCollection
{
    /**
     * @psalm-assert MyCustomerSetFirstNameAction $value
     * @psalm-param MyCustomerSetFirstNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCustomerSetFirstNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerSetFirstNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerSetFirstNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCustomerSetFirstNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCustomerSetFirstNameAction $data */
                $data = MyCustomerSetFirstNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
