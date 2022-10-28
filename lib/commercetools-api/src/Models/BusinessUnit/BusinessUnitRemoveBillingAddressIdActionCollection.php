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
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitRemoveBillingAddressIdAction>
 * @method BusinessUnitRemoveBillingAddressIdAction current()
 * @method BusinessUnitRemoveBillingAddressIdAction end()
 * @method BusinessUnitRemoveBillingAddressIdAction at($offset)
 */
class BusinessUnitRemoveBillingAddressIdActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitRemoveBillingAddressIdAction $value
     * @psalm-param BusinessUnitRemoveBillingAddressIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitRemoveBillingAddressIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitRemoveBillingAddressIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitRemoveBillingAddressIdAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitRemoveBillingAddressIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitRemoveBillingAddressIdAction $data */
                $data = BusinessUnitRemoveBillingAddressIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
