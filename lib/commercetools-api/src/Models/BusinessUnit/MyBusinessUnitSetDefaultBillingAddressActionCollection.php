<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Me\MyBusinessUnitUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MyBusinessUnitUpdateActionCollection<MyBusinessUnitSetDefaultBillingAddressAction>
 * @method MyBusinessUnitSetDefaultBillingAddressAction current()
 * @method MyBusinessUnitSetDefaultBillingAddressAction end()
 * @method MyBusinessUnitSetDefaultBillingAddressAction at($offset)
 */
class MyBusinessUnitSetDefaultBillingAddressActionCollection extends MyBusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert MyBusinessUnitSetDefaultBillingAddressAction $value
     * @psalm-param MyBusinessUnitSetDefaultBillingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyBusinessUnitSetDefaultBillingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyBusinessUnitSetDefaultBillingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyBusinessUnitSetDefaultBillingAddressAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyBusinessUnitSetDefaultBillingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyBusinessUnitSetDefaultBillingAddressAction $data */
                $data = MyBusinessUnitSetDefaultBillingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
