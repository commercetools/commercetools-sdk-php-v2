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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetLineItemPriceAction>
 * @method StagedOrderSetLineItemPriceAction current()
 * @method StagedOrderSetLineItemPriceAction at($offset)
 */
class StagedOrderSetLineItemPriceActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetLineItemPriceAction $value
     * @psalm-param StagedOrderSetLineItemPriceAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetLineItemPriceActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetLineItemPriceAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetLineItemPriceAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetLineItemPriceAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetLineItemPriceAction $data */
                $data = StagedOrderSetLineItemPriceActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
