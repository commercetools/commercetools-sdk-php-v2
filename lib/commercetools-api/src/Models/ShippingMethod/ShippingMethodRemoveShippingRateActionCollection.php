<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ShippingMethodRemoveShippingRateAction>
 * @method ShippingMethodRemoveShippingRateAction current()
 * @method ShippingMethodRemoveShippingRateAction at($offset)
 */
class ShippingMethodRemoveShippingRateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ShippingMethodRemoveShippingRateAction $value
     * @psalm-param ShippingMethodRemoveShippingRateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodRemoveShippingRateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodRemoveShippingRateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodRemoveShippingRateAction
     */
    protected function mapper()
    {
        return function (int $index): ?ShippingMethodRemoveShippingRateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShippingMethodRemoveShippingRateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
