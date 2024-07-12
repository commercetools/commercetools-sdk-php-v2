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
 * @extends ShippingMethodUpdateActionCollection<ShippingMethodChangeActiveAction>
 * @method ShippingMethodChangeActiveAction current()
 * @method ShippingMethodChangeActiveAction end()
 * @method ShippingMethodChangeActiveAction at($offset)
 */
class ShippingMethodChangeActiveActionCollection extends ShippingMethodUpdateActionCollection
{
    /**
     * @psalm-assert ShippingMethodChangeActiveAction $value
     * @psalm-param ShippingMethodChangeActiveAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodChangeActiveActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodChangeActiveAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodChangeActiveAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodChangeActiveAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodChangeActiveAction $data */
                $data = ShippingMethodChangeActiveActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
