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
 * @extends MyCustomerUpdateActionCollection<MyCustomerSetMiddleNameAction>
 * @method MyCustomerSetMiddleNameAction current()
 * @method MyCustomerSetMiddleNameAction end()
 * @method MyCustomerSetMiddleNameAction at($offset)
 */
class MyCustomerSetMiddleNameActionCollection extends MyCustomerUpdateActionCollection
{
    /**
     * @psalm-assert MyCustomerSetMiddleNameAction $value
     * @psalm-param MyCustomerSetMiddleNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCustomerSetMiddleNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerSetMiddleNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerSetMiddleNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCustomerSetMiddleNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCustomerSetMiddleNameAction $data */
                $data = MyCustomerSetMiddleNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
