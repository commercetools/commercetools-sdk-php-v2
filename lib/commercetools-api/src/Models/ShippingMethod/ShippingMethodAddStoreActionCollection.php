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
 * @extends ShippingMethodUpdateActionCollection<ShippingMethodAddStoreAction>
 * @method ShippingMethodAddStoreAction current()
 * @method ShippingMethodAddStoreAction end()
 * @method ShippingMethodAddStoreAction at($offset)
 */
class ShippingMethodAddStoreActionCollection extends ShippingMethodUpdateActionCollection
{
    /**
     * @psalm-assert ShippingMethodAddStoreAction $value
     * @psalm-param ShippingMethodAddStoreAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodAddStoreActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodAddStoreAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodAddStoreAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodAddStoreAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodAddStoreAction $data */
                $data = ShippingMethodAddStoreActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
