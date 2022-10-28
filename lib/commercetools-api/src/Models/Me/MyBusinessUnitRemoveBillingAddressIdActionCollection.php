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
 * @extends MyBusinessUnitUpdateActionCollection<MyBusinessUnitRemoveBillingAddressIdAction>
 * @method MyBusinessUnitRemoveBillingAddressIdAction current()
 * @method MyBusinessUnitRemoveBillingAddressIdAction end()
 * @method MyBusinessUnitRemoveBillingAddressIdAction at($offset)
 */
class MyBusinessUnitRemoveBillingAddressIdActionCollection extends MyBusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert MyBusinessUnitRemoveBillingAddressIdAction $value
     * @psalm-param MyBusinessUnitRemoveBillingAddressIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyBusinessUnitRemoveBillingAddressIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyBusinessUnitRemoveBillingAddressIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyBusinessUnitRemoveBillingAddressIdAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyBusinessUnitRemoveBillingAddressIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyBusinessUnitRemoveBillingAddressIdAction $data */
                $data = MyBusinessUnitRemoveBillingAddressIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
