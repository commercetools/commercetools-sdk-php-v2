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
 * @extends StagedOrderUpdateActionCollection<StagedOrderAddItemShippingAddressAction>
 * @method StagedOrderAddItemShippingAddressAction current()
 * @method StagedOrderAddItemShippingAddressAction at($offset)
 */
class StagedOrderAddItemShippingAddressActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderAddItemShippingAddressAction $value
     * @psalm-param StagedOrderAddItemShippingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderAddItemShippingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderAddItemShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderAddItemShippingAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderAddItemShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderAddItemShippingAddressAction $data */
                $data = StagedOrderAddItemShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
