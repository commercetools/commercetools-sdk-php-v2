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
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitSetDefaultBillingAddressAction>
 * @method BusinessUnitSetDefaultBillingAddressAction current()
 * @method BusinessUnitSetDefaultBillingAddressAction end()
 * @method BusinessUnitSetDefaultBillingAddressAction at($offset)
 */
class BusinessUnitSetDefaultBillingAddressActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitSetDefaultBillingAddressAction $value
     * @psalm-param BusinessUnitSetDefaultBillingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitSetDefaultBillingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitSetDefaultBillingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitSetDefaultBillingAddressAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitSetDefaultBillingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitSetDefaultBillingAddressAction $data */
                $data = BusinessUnitSetDefaultBillingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
