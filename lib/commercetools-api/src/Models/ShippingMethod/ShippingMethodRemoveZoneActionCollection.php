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
 * @extends ShippingMethodUpdateActionCollection<ShippingMethodRemoveZoneAction>
 * @method ShippingMethodRemoveZoneAction current()
 * @method ShippingMethodRemoveZoneAction at($offset)
 */
class ShippingMethodRemoveZoneActionCollection extends ShippingMethodUpdateActionCollection
{
    /**
     * @psalm-assert ShippingMethodRemoveZoneAction $value
     * @psalm-param ShippingMethodRemoveZoneAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodRemoveZoneActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodRemoveZoneAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodRemoveZoneAction
     */
    protected function mapper()
    {
        return function (int $index): ?ShippingMethodRemoveZoneAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodRemoveZoneAction $data */
                $data = ShippingMethodRemoveZoneActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
