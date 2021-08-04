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
 * @extends MyCustomerUpdateActionCollection<MyCustomerSetLastNameAction>
 * @method MyCustomerSetLastNameAction current()
 * @method MyCustomerSetLastNameAction end()
 * @method MyCustomerSetLastNameAction at($offset)
 */
class MyCustomerSetLastNameActionCollection extends MyCustomerUpdateActionCollection
{
    /**
     * @psalm-assert MyCustomerSetLastNameAction $value
     * @psalm-param MyCustomerSetLastNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCustomerSetLastNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerSetLastNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerSetLastNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCustomerSetLastNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCustomerSetLastNameAction $data */
                $data = MyCustomerSetLastNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
