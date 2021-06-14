<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Me\MyCartUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MyCartUpdateActionCollection<MyCartSetCustomerEmailAction>
 * @method MyCartSetCustomerEmailAction current()
 * @method MyCartSetCustomerEmailAction at($offset)
 */
class MyCartSetCustomerEmailActionCollection extends MyCartUpdateActionCollection
{
    /**
     * @psalm-assert MyCartSetCustomerEmailAction $value
     * @psalm-param MyCartSetCustomerEmailAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartSetCustomerEmailActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartSetCustomerEmailAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartSetCustomerEmailAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCartSetCustomerEmailAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCartSetCustomerEmailAction $data */
                $data = MyCartSetCustomerEmailActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
