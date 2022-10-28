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
 * @extends MyBusinessUnitUpdateActionCollection<MyBusinessUnitRemoveShippingAddressIdAction>
 * @method MyBusinessUnitRemoveShippingAddressIdAction current()
 * @method MyBusinessUnitRemoveShippingAddressIdAction end()
 * @method MyBusinessUnitRemoveShippingAddressIdAction at($offset)
 */
class MyBusinessUnitRemoveShippingAddressIdActionCollection extends MyBusinessUnitUpdateActionCollection
{
    /**
     * @psalm-assert MyBusinessUnitRemoveShippingAddressIdAction $value
     * @psalm-param MyBusinessUnitRemoveShippingAddressIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyBusinessUnitRemoveShippingAddressIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyBusinessUnitRemoveShippingAddressIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyBusinessUnitRemoveShippingAddressIdAction
     */
    protected function mapper()
    {
        return function (?int $index): ?MyBusinessUnitRemoveShippingAddressIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyBusinessUnitRemoveShippingAddressIdAction $data */
                $data = MyBusinessUnitRemoveShippingAddressIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
