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
 * @extends MyCustomerUpdateActionCollection<MyCustomerSetVatIdAction>
 * @method MyCustomerSetVatIdAction current()
 * @method MyCustomerSetVatIdAction end()
 * @method MyCustomerSetVatIdAction at($offset)
 */
class MyCustomerSetVatIdActionCollection extends MyCustomerUpdateActionCollection
{
    /**
     * @psalm-assert MyCustomerSetVatIdAction $value
     * @psalm-param MyCustomerSetVatIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCustomerSetVatIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerSetVatIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerSetVatIdAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCustomerSetVatIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCustomerSetVatIdAction $data */
                $data = MyCustomerSetVatIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
