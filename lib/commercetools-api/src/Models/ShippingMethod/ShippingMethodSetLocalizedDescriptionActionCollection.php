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
 * @extends MapperSequence<ShippingMethodSetLocalizedDescriptionAction>
 * @method ShippingMethodSetLocalizedDescriptionAction current()
 * @method ShippingMethodSetLocalizedDescriptionAction at($offset)
 */
class ShippingMethodSetLocalizedDescriptionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ShippingMethodSetLocalizedDescriptionAction $value
     * @psalm-param ShippingMethodSetLocalizedDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodSetLocalizedDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodSetLocalizedDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodSetLocalizedDescriptionAction
     */
    protected function mapper()
    {
        return function (int $index): ?ShippingMethodSetLocalizedDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShippingMethodSetLocalizedDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
