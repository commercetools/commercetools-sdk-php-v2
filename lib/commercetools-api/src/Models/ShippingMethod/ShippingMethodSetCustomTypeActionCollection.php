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
 * @extends ShippingMethodUpdateActionCollection<ShippingMethodSetCustomTypeAction>
 * @method ShippingMethodSetCustomTypeAction current()
 * @method ShippingMethodSetCustomTypeAction at($offset)
 */
class ShippingMethodSetCustomTypeActionCollection extends ShippingMethodUpdateActionCollection
{
    /**
     * @psalm-assert ShippingMethodSetCustomTypeAction $value
     * @psalm-param ShippingMethodSetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?ShippingMethodSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodSetCustomTypeAction $data */
                $data = ShippingMethodSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
