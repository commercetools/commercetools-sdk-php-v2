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
 * @extends ProductTypeUpdateActionCollection<ProductTypeChangeAttributeOrderByNameAction>
 * @method ProductTypeChangeAttributeOrderByNameAction current()
 * @method ProductTypeChangeAttributeOrderByNameAction at($offset)
 */
class ProductTypeChangeAttributeOrderByNameActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @psalm-assert ProductTypeChangeAttributeOrderByNameAction $value
     * @psalm-param ProductTypeChangeAttributeOrderByNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTypeChangeAttributeOrderByNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeChangeAttributeOrderByNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeChangeAttributeOrderByNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductTypeChangeAttributeOrderByNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTypeChangeAttributeOrderByNameAction $data */
                $data = ProductTypeChangeAttributeOrderByNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
