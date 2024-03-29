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
 * @extends ShippingMethodUpdateActionCollection<ShippingMethodAddZoneAction>
 * @method ShippingMethodAddZoneAction current()
 * @method ShippingMethodAddZoneAction end()
 * @method ShippingMethodAddZoneAction at($offset)
 */
class ShippingMethodAddZoneActionCollection extends ShippingMethodUpdateActionCollection
{
    /**
     * @psalm-assert ShippingMethodAddZoneAction $value
     * @psalm-param ShippingMethodAddZoneAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodAddZoneActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodAddZoneAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodAddZoneAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodAddZoneAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodAddZoneAction $data */
                $data = ShippingMethodAddZoneActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
