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
 * @extends ShippingMethodUpdateActionCollection<ShippingMethodSetCarrierAction>
 * @method ShippingMethodSetCarrierAction current()
 * @method ShippingMethodSetCarrierAction end()
 * @method ShippingMethodSetCarrierAction at($offset)
 */
class ShippingMethodSetCarrierActionCollection extends ShippingMethodUpdateActionCollection
{
    /**
     * @psalm-assert ShippingMethodSetCarrierAction $value
     * @psalm-param ShippingMethodSetCarrierAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodSetCarrierActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodSetCarrierAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodSetCarrierAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodSetCarrierAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodSetCarrierAction $data */
                $data = ShippingMethodSetCarrierActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
