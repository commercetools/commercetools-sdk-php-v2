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
 * @extends ShippingMethodUpdateActionCollection<ShippingMethodSetKeyAction>
 * @method ShippingMethodSetKeyAction current()
 * @method ShippingMethodSetKeyAction at($offset)
 */
class ShippingMethodSetKeyActionCollection extends ShippingMethodUpdateActionCollection
{
    /**
     * @psalm-assert ShippingMethodSetKeyAction $value
     * @psalm-param ShippingMethodSetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodSetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodSetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodSetKeyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodSetKeyAction $data */
                $data = ShippingMethodSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
