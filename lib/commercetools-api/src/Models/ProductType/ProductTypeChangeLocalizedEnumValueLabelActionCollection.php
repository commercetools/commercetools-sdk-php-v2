<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Api\Models\ProductType\ProductTypeUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductTypeUpdateActionCollection<ProductTypeChangeLocalizedEnumValueLabelAction>
 * @method ProductTypeChangeLocalizedEnumValueLabelAction current()
 * @method ProductTypeChangeLocalizedEnumValueLabelAction at($offset)
 */
class ProductTypeChangeLocalizedEnumValueLabelActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @psalm-assert ProductTypeChangeLocalizedEnumValueLabelAction $value
     * @psalm-param ProductTypeChangeLocalizedEnumValueLabelAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTypeChangeLocalizedEnumValueLabelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeChangeLocalizedEnumValueLabelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeChangeLocalizedEnumValueLabelAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductTypeChangeLocalizedEnumValueLabelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTypeChangeLocalizedEnumValueLabelAction $data */
                $data = ProductTypeChangeLocalizedEnumValueLabelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
