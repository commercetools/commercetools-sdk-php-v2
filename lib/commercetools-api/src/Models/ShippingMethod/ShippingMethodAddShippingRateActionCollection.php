<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\ShippingMethod\ShippingMethodUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ShippingMethodUpdateActionCollection<ShippingMethodAddShippingRateAction>
 * @method ShippingMethodAddShippingRateAction current()
 * @method ShippingMethodAddShippingRateAction at($offset)
 */
class ShippingMethodAddShippingRateActionCollection extends ShippingMethodUpdateActionCollection
{
    /**
     * @psalm-assert ShippingMethodAddShippingRateAction $value
     * @psalm-param ShippingMethodAddShippingRateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodAddShippingRateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodAddShippingRateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodAddShippingRateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodAddShippingRateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodAddShippingRateAction $data */
                $data = ShippingMethodAddShippingRateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
