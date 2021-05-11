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
 * @extends MyCustomerUpdateActionCollection<MyCustomerSetLocaleAction>
 * @method MyCustomerSetLocaleAction current()
 * @method MyCustomerSetLocaleAction at($offset)
 */
class MyCustomerSetLocaleActionCollection extends MyCustomerUpdateActionCollection
{
    /**
     * @psalm-assert MyCustomerSetLocaleAction $value
     * @psalm-param MyCustomerSetLocaleAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCustomerSetLocaleActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerSetLocaleAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerSetLocaleAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCustomerSetLocaleAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCustomerSetLocaleAction $data */
                $data = MyCustomerSetLocaleActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
