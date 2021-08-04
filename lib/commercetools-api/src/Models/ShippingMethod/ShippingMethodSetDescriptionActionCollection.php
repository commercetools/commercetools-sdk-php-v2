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
 * @extends ShippingMethodUpdateActionCollection<ShippingMethodSetDescriptionAction>
 * @method ShippingMethodSetDescriptionAction current()
 * @method ShippingMethodSetDescriptionAction end()
 * @method ShippingMethodSetDescriptionAction at($offset)
 */
class ShippingMethodSetDescriptionActionCollection extends ShippingMethodUpdateActionCollection
{
    /**
     * @psalm-assert ShippingMethodSetDescriptionAction $value
     * @psalm-param ShippingMethodSetDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodSetDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodSetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodSetDescriptionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodSetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodSetDescriptionAction $data */
                $data = ShippingMethodSetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
