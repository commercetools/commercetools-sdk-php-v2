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
 * @extends ProductTypeUpdateActionCollection<ProductTypeRemoveEnumValuesAction>
 * @method ProductTypeRemoveEnumValuesAction current()
 * @method ProductTypeRemoveEnumValuesAction end()
 * @method ProductTypeRemoveEnumValuesAction at($offset)
 */
class ProductTypeRemoveEnumValuesActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @psalm-assert ProductTypeRemoveEnumValuesAction $value
     * @psalm-param ProductTypeRemoveEnumValuesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTypeRemoveEnumValuesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeRemoveEnumValuesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeRemoveEnumValuesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTypeRemoveEnumValuesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTypeRemoveEnumValuesAction $data */
                $data = ProductTypeRemoveEnumValuesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
