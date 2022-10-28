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
 * @extends BusinessUnitUpdateActionCollection<BusinessUnitRemoveShippingAddressIdAction>
 * @method BusinessUnitRemoveShippingAddressIdAction current()
 * @method BusinessUnitRemoveShippingAddressIdAction end()
 * @method BusinessUnitRemoveShippingAddressIdAction at($offset)
 */
class BusinessUnitRemoveShippingAddressIdActionCollection extends BusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert BusinessUnitRemoveShippingAddressIdAction $value
     * @psalm-param BusinessUnitRemoveShippingAddressIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitRemoveShippingAddressIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitRemoveShippingAddressIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitRemoveShippingAddressIdAction
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitRemoveShippingAddressIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitRemoveShippingAddressIdAction $data */
                $data = BusinessUnitRemoveShippingAddressIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
