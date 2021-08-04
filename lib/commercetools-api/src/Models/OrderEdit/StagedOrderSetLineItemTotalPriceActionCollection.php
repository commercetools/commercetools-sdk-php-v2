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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetLineItemTotalPriceAction>
 * @method StagedOrderSetLineItemTotalPriceAction current()
 * @method StagedOrderSetLineItemTotalPriceAction at($offset)
 */
class StagedOrderSetLineItemTotalPriceActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetLineItemTotalPriceAction $value
     * @psalm-param StagedOrderSetLineItemTotalPriceAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetLineItemTotalPriceActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetLineItemTotalPriceAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetLineItemTotalPriceAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetLineItemTotalPriceAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetLineItemTotalPriceAction $data */
                $data = StagedOrderSetLineItemTotalPriceActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
