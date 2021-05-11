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
 * @extends MyCustomerUpdateActionCollection<MyCustomerSetCustomFieldAction>
 * @method MyCustomerSetCustomFieldAction current()
 * @method MyCustomerSetCustomFieldAction at($offset)
 */
class MyCustomerSetCustomFieldActionCollection extends MyCustomerUpdateActionCollection
{
    /**
     * @psalm-assert MyCustomerSetCustomFieldAction $value
     * @psalm-param MyCustomerSetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCustomerSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCustomerSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCustomerSetCustomFieldAction $data */
                $data = MyCustomerSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
