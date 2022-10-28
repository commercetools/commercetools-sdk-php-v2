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
 * @extends MyBusinessUnitUpdateActionCollection<MyBusinessUnitAddShippingAddressIdAction>
 * @method MyBusinessUnitAddShippingAddressIdAction current()
 * @method MyBusinessUnitAddShippingAddressIdAction end()
 * @method MyBusinessUnitAddShippingAddressIdAction at($offset)
 */
class MyBusinessUnitAddShippingAddressIdActionCollection extends MyBusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert MyBusinessUnitAddShippingAddressIdAction $value
     * @psalm-param MyBusinessUnitAddShippingAddressIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyBusinessUnitAddShippingAddressIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyBusinessUnitAddShippingAddressIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyBusinessUnitAddShippingAddressIdAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyBusinessUnitAddShippingAddressIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyBusinessUnitAddShippingAddressIdAction $data */
                $data = MyBusinessUnitAddShippingAddressIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
