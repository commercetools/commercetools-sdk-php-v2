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
 * @extends MapperSequence<ShippingMethodChangeNameAction>
 * @method ShippingMethodChangeNameAction current()
 * @method ShippingMethodChangeNameAction at($offset)
 */
class ShippingMethodChangeNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ShippingMethodChangeNameAction $value
     * @psalm-param ShippingMethodChangeNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodChangeNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodChangeNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodChangeNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?ShippingMethodChangeNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShippingMethodChangeNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
