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
 * @extends ProductTypeUpdateActionCollection<ProductTypeChangeLocalizedEnumValueOrderAction>
 * @method ProductTypeChangeLocalizedEnumValueOrderAction current()
 * @method ProductTypeChangeLocalizedEnumValueOrderAction end()
 * @method ProductTypeChangeLocalizedEnumValueOrderAction at($offset)
 */
class ProductTypeChangeLocalizedEnumValueOrderActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @psalm-assert ProductTypeChangeLocalizedEnumValueOrderAction $value
     * @psalm-param ProductTypeChangeLocalizedEnumValueOrderAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTypeChangeLocalizedEnumValueOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeChangeLocalizedEnumValueOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeChangeLocalizedEnumValueOrderAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTypeChangeLocalizedEnumValueOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTypeChangeLocalizedEnumValueOrderAction $data */
                $data = ProductTypeChangeLocalizedEnumValueOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
