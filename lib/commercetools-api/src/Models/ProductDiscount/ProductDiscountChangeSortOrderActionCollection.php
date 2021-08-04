<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Api\Models\ProductDiscount\ProductDiscountUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductDiscountUpdateActionCollection<ProductDiscountChangeSortOrderAction>
 * @method ProductDiscountChangeSortOrderAction current()
 * @method ProductDiscountChangeSortOrderAction end()
 * @method ProductDiscountChangeSortOrderAction at($offset)
 */
class ProductDiscountChangeSortOrderActionCollection extends ProductDiscountUpdateActionCollection
{
    /**
     * @psalm-assert ProductDiscountChangeSortOrderAction $value
     * @psalm-param ProductDiscountChangeSortOrderAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountChangeSortOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountChangeSortOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountChangeSortOrderAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductDiscountChangeSortOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductDiscountChangeSortOrderAction $data */
                $data = ProductDiscountChangeSortOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
