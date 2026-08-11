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
 * @extends ShippingMethodUpdateActionCollection<ShippingMethodRemoveStoreAction>
 * @method ShippingMethodRemoveStoreAction current()
 * @method ShippingMethodRemoveStoreAction end()
 * @method ShippingMethodRemoveStoreAction at($offset)
 */
class ShippingMethodRemoveStoreActionCollection extends ShippingMethodUpdateActionCollection
{
    /**
     * @psalm-assert ShippingMethodRemoveStoreAction $value
     * @psalm-param ShippingMethodRemoveStoreAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodRemoveStoreActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodRemoveStoreAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodRemoveStoreAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodRemoveStoreAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodRemoveStoreAction $data */
                $data = ShippingMethodRemoveStoreActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
