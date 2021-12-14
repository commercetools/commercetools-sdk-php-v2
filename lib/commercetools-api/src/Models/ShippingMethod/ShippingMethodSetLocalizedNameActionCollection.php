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
 * @extends ShippingMethodUpdateActionCollection<ShippingMethodSetLocalizedNameAction>
 * @method ShippingMethodSetLocalizedNameAction current()
 * @method ShippingMethodSetLocalizedNameAction end()
 * @method ShippingMethodSetLocalizedNameAction at($offset)
 */
class ShippingMethodSetLocalizedNameActionCollection extends ShippingMethodUpdateActionCollection
{
    /**
     * @psalm-assert ShippingMethodSetLocalizedNameAction $value
     * @psalm-param ShippingMethodSetLocalizedNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodSetLocalizedNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodSetLocalizedNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodSetLocalizedNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodSetLocalizedNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodSetLocalizedNameAction $data */
                $data = ShippingMethodSetLocalizedNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
