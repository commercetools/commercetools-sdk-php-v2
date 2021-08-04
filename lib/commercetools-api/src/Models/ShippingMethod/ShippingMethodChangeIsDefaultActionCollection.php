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
 * @extends ShippingMethodUpdateActionCollection<ShippingMethodChangeIsDefaultAction>
 * @method ShippingMethodChangeIsDefaultAction current()
 * @method ShippingMethodChangeIsDefaultAction at($offset)
 */
class ShippingMethodChangeIsDefaultActionCollection extends ShippingMethodUpdateActionCollection
{
    /**
     * @psalm-assert ShippingMethodChangeIsDefaultAction $value
     * @psalm-param ShippingMethodChangeIsDefaultAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodChangeIsDefaultActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodChangeIsDefaultAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodChangeIsDefaultAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodChangeIsDefaultAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodChangeIsDefaultAction $data */
                $data = ShippingMethodChangeIsDefaultActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
