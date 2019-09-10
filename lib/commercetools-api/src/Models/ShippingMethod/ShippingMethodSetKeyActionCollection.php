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
 * @extends MapperSequence<ShippingMethodSetKeyAction>
 *
 * @method ShippingMethodSetKeyAction current()
 * @method ShippingMethodSetKeyAction at($offset)
 */
class ShippingMethodSetKeyActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ShippingMethodSetKeyAction $value
     * @psalm-param ShippingMethodSetKeyAction|stdClass $value
     *
     * @param mixed $value
     *
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
        return function (int $index): ?ShippingMethodSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShippingMethodSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
