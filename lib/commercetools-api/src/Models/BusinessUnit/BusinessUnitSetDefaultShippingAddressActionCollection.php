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
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitSetDefaultShippingAddressAction>
 * @method BusinessUnitSetDefaultShippingAddressAction current()
 * @method BusinessUnitSetDefaultShippingAddressAction end()
 * @method BusinessUnitSetDefaultShippingAddressAction at($offset)
 */
class BusinessUnitSetDefaultShippingAddressActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitSetDefaultShippingAddressAction $value
     * @psalm-param BusinessUnitSetDefaultShippingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitSetDefaultShippingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitSetDefaultShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitSetDefaultShippingAddressAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitSetDefaultShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitSetDefaultShippingAddressAction $data */
                $data = BusinessUnitSetDefaultShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
