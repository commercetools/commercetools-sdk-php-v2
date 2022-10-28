<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitAddBillingAddressIdAction>
 * @method BusinessUnitAddBillingAddressIdAction current()
 * @method BusinessUnitAddBillingAddressIdAction end()
 * @method BusinessUnitAddBillingAddressIdAction at($offset)
 */
class BusinessUnitAddBillingAddressIdActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitAddBillingAddressIdAction $value
     * @psalm-param BusinessUnitAddBillingAddressIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAddBillingAddressIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAddBillingAddressIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAddBillingAddressIdAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAddBillingAddressIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAddBillingAddressIdAction $data */
                $data = BusinessUnitAddBillingAddressIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
