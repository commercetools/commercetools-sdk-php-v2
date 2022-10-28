<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Me\MyBusinessUnitUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MyBusinessUnitUpdateActionCollection<MyBusinessUnitAddBillingAddressIdAction>
 * @method MyBusinessUnitAddBillingAddressIdAction current()
 * @method MyBusinessUnitAddBillingAddressIdAction end()
 * @method MyBusinessUnitAddBillingAddressIdAction at($offset)
 */
class MyBusinessUnitAddBillingAddressIdActionCollection extends MyBusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert MyBusinessUnitAddBillingAddressIdAction $value
     * @psalm-param MyBusinessUnitAddBillingAddressIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyBusinessUnitAddBillingAddressIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyBusinessUnitAddBillingAddressIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyBusinessUnitAddBillingAddressIdAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyBusinessUnitAddBillingAddressIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyBusinessUnitAddBillingAddressIdAction $data */
                $data = MyBusinessUnitAddBillingAddressIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
