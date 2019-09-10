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
 * @extends MapperSequence<ShippingMethodChangeTaxCategoryAction>
 *
 * @method ShippingMethodChangeTaxCategoryAction current()
 * @method ShippingMethodChangeTaxCategoryAction at($offset)
 */
class ShippingMethodChangeTaxCategoryActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ShippingMethodChangeTaxCategoryAction $value
     * @psalm-param ShippingMethodChangeTaxCategoryAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodChangeTaxCategoryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodChangeTaxCategoryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodChangeTaxCategoryAction
     */
    protected function mapper()
    {
        return function (int $index): ?ShippingMethodChangeTaxCategoryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShippingMethodChangeTaxCategoryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
