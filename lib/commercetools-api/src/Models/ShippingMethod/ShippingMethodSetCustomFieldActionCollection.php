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
 * @extends MapperSequence<ShippingMethodSetCustomFieldAction>
 * @method ShippingMethodSetCustomFieldAction current()
 * @method ShippingMethodSetCustomFieldAction at($offset)
 */
class ShippingMethodSetCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ShippingMethodSetCustomFieldAction $value
     * @psalm-param ShippingMethodSetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?ShippingMethodSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShippingMethodSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
