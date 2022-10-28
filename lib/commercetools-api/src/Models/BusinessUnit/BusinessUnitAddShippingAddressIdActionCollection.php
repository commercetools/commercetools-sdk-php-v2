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
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitAddShippingAddressIdAction>
 * @method BusinessUnitAddShippingAddressIdAction current()
 * @method BusinessUnitAddShippingAddressIdAction end()
 * @method BusinessUnitAddShippingAddressIdAction at($offset)
 */
class BusinessUnitAddShippingAddressIdActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitAddShippingAddressIdAction $value
     * @psalm-param BusinessUnitAddShippingAddressIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitAddShippingAddressIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitAddShippingAddressIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitAddShippingAddressIdAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitAddShippingAddressIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitAddShippingAddressIdAction $data */
                $data = BusinessUnitAddShippingAddressIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
