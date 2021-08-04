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
 * @extends ProductTypeUpdateActionCollection<ProductTypeChangeEnumKeyAction>
 * @method ProductTypeChangeEnumKeyAction current()
 * @method ProductTypeChangeEnumKeyAction end()
 * @method ProductTypeChangeEnumKeyAction at($offset)
 */
class ProductTypeChangeEnumKeyActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @psalm-assert ProductTypeChangeEnumKeyAction $value
     * @psalm-param ProductTypeChangeEnumKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTypeChangeEnumKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeChangeEnumKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeChangeEnumKeyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTypeChangeEnumKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTypeChangeEnumKeyAction $data */
                $data = ProductTypeChangeEnumKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
