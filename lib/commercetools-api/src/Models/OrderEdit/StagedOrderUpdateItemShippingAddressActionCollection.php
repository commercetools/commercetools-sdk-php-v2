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
 * @extends StagedOrderUpdateActionCollection<StagedOrderUpdateItemShippingAddressAction>
 * @method StagedOrderUpdateItemShippingAddressAction current()
 * @method StagedOrderUpdateItemShippingAddressAction at($offset)
 */
class StagedOrderUpdateItemShippingAddressActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderUpdateItemShippingAddressAction $value
     * @psalm-param StagedOrderUpdateItemShippingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderUpdateItemShippingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderUpdateItemShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderUpdateItemShippingAddressAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderUpdateItemShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderUpdateItemShippingAddressAction $data */
                $data = StagedOrderUpdateItemShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
