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
 * @extends MyCartUpdateActionCollection<MyCartSetBillingAddressAction>
 * @method MyCartSetBillingAddressAction current()
 * @method MyCartSetBillingAddressAction end()
 * @method MyCartSetBillingAddressAction at($offset)
 */
class MyCartSetBillingAddressActionCollection extends MyCartUpdateActionCollection
{
    /**
     * @psalm-assert MyCartSetBillingAddressAction $value
     * @psalm-param MyCartSetBillingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartSetBillingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartSetBillingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartSetBillingAddressAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCartSetBillingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCartSetBillingAddressAction $data */
                $data = MyCartSetBillingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
