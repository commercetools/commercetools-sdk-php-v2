<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetShippingAddressCustomTypeAction>
 * @method StagedOrderSetShippingAddressCustomTypeAction current()
 * @method StagedOrderSetShippingAddressCustomTypeAction at($offset)
 */
class StagedOrderSetShippingAddressCustomTypeActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetShippingAddressCustomTypeAction $value
     * @psalm-param StagedOrderSetShippingAddressCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetShippingAddressCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetShippingAddressCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetShippingAddressCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetShippingAddressCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetShippingAddressCustomTypeAction $data */
                $data = StagedOrderSetShippingAddressCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
