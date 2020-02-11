<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<StagedOrderSetShippingRateInputAction>
 * @method StagedOrderSetShippingRateInputAction current()
 * @method StagedOrderSetShippingRateInputAction at($offset)
 */
class StagedOrderSetShippingRateInputActionCollection extends MapperSequence
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
        return function (int $index): ?StagedOrderSetShippingRateInputAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderSetShippingRateInputActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
