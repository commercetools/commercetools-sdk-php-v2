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
 * @extends ProductTypeUpdateActionCollection<ProductTypeChangeAttributeConstraintAction>
 * @method ProductTypeChangeAttributeConstraintAction current()
 * @method ProductTypeChangeAttributeConstraintAction at($offset)
 */
class ProductTypeChangeAttributeConstraintActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @psalm-assert ProductTypeChangeAttributeConstraintAction $value
     * @psalm-param ProductTypeChangeAttributeConstraintAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTypeChangeAttributeConstraintActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeChangeAttributeConstraintAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeChangeAttributeConstraintAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductTypeChangeAttributeConstraintAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTypeChangeAttributeConstraintAction $data */
                $data = ProductTypeChangeAttributeConstraintActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
