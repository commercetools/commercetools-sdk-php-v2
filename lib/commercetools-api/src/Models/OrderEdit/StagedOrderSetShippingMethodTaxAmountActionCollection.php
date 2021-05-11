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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetShippingMethodTaxAmountAction>
 * @method StagedOrderSetShippingMethodTaxAmountAction current()
 * @method StagedOrderSetShippingMethodTaxAmountAction at($offset)
 */
class StagedOrderSetShippingMethodTaxAmountActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetShippingMethodTaxAmountAction $value
     * @psalm-param StagedOrderSetShippingMethodTaxAmountAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetShippingMethodTaxAmountActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetShippingMethodTaxAmountAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetShippingMethodTaxAmountAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetShippingMethodTaxAmountAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetShippingMethodTaxAmountAction $data */
                $data = StagedOrderSetShippingMethodTaxAmountActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
