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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetItemShippingAddressCustomTypeAction>
 * @method StagedOrderSetItemShippingAddressCustomTypeAction current()
 * @method StagedOrderSetItemShippingAddressCustomTypeAction at($offset)
 */
class StagedOrderSetItemShippingAddressCustomTypeActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetItemShippingAddressCustomTypeAction $value
     * @psalm-param StagedOrderSetItemShippingAddressCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetItemShippingAddressCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetItemShippingAddressCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetItemShippingAddressCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetItemShippingAddressCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetItemShippingAddressCustomTypeAction $data */
                $data = StagedOrderSetItemShippingAddressCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
