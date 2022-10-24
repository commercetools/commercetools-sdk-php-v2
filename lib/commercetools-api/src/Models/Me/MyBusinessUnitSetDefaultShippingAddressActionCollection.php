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
 * @extends MyBusinessUnitUpdateActionCollection<MyBusinessUnitSetDefaultShippingAddressAction>
 * @method MyBusinessUnitSetDefaultShippingAddressAction current()
 * @method MyBusinessUnitSetDefaultShippingAddressAction end()
 * @method MyBusinessUnitSetDefaultShippingAddressAction at($offset)
 */
class MyBusinessUnitSetDefaultShippingAddressActionCollection extends MyBusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert MyBusinessUnitSetDefaultShippingAddressAction $value
     * @psalm-param MyBusinessUnitSetDefaultShippingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyBusinessUnitSetDefaultShippingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyBusinessUnitSetDefaultShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyBusinessUnitSetDefaultShippingAddressAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyBusinessUnitSetDefaultShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyBusinessUnitSetDefaultShippingAddressAction $data */
                $data = MyBusinessUnitSetDefaultShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
