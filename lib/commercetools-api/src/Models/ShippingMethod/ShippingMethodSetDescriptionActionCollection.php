<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ShippingMethodSetDescriptionAction>
 *
 * @method ShippingMethodSetDescriptionAction current()
 * @method ShippingMethodSetDescriptionAction at($offset)
 */
class ShippingMethodSetDescriptionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ShippingMethodSetDescriptionAction $value
     * @psalm-param ShippingMethodSetDescriptionAction|stdClass $value
     *
     * @param mixed $value
     *
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
        return function (int $index): ?ShippingMethodSetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShippingMethodSetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
