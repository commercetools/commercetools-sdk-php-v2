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
 * @extends ProductTypeUpdateActionCollection<ProductTypeChangeAttributeOrderAction>
 * @method ProductTypeChangeAttributeOrderAction current()
 * @method ProductTypeChangeAttributeOrderAction at($offset)
 */
class ProductTypeChangeAttributeOrderActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @psalm-assert ProductTypeChangeAttributeOrderAction $value
     * @psalm-param ProductTypeChangeAttributeOrderAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTypeChangeAttributeOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeChangeAttributeOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeChangeAttributeOrderAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTypeChangeAttributeOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTypeChangeAttributeOrderAction $data */
                $data = ProductTypeChangeAttributeOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
