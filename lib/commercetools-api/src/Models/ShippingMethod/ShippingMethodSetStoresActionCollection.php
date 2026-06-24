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
 * @extends ShippingMethodUpdateActionCollection<ShippingMethodSetStoresAction>
 * @method ShippingMethodSetStoresAction current()
 * @method ShippingMethodSetStoresAction end()
 * @method ShippingMethodSetStoresAction at($offset)
 */
class ShippingMethodSetStoresActionCollection extends ShippingMethodUpdateActionCollection
{
    /**
     * @psalm-assert ShippingMethodSetStoresAction $value
     * @psalm-param ShippingMethodSetStoresAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodSetStoresActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodSetStoresAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodSetStoresAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodSetStoresAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodSetStoresAction $data */
                $data = ShippingMethodSetStoresActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
