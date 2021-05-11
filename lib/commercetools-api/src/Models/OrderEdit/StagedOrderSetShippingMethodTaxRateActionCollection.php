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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetShippingMethodTaxRateAction>
 * @method StagedOrderSetShippingMethodTaxRateAction current()
 * @method StagedOrderSetShippingMethodTaxRateAction at($offset)
 */
class StagedOrderSetShippingMethodTaxRateActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetShippingMethodTaxRateAction $value
     * @psalm-param StagedOrderSetShippingMethodTaxRateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetShippingMethodTaxRateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetShippingMethodTaxRateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetShippingMethodTaxRateAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetShippingMethodTaxRateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetShippingMethodTaxRateAction $data */
                $data = StagedOrderSetShippingMethodTaxRateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
