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
 * @extends StagedOrderUpdateActionCollection<StagedOrderSetShippingRateInputAction>
 * @method StagedOrderSetShippingRateInputAction current()
 * @method StagedOrderSetShippingRateInputAction at($offset)
 */
class StagedOrderSetShippingRateInputActionCollection extends StagedOrderUpdateActionCollection
{
    /**
     * @psalm-assert StagedOrderSetShippingRateInputAction $value
     * @psalm-param StagedOrderSetShippingRateInputAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetShippingRateInputActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetShippingRateInputAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetShippingRateInputAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedOrderSetShippingRateInputAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedOrderSetShippingRateInputAction $data */
                $data = StagedOrderSetShippingRateInputActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
