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
 * @extends ProductDiscountUpdateActionCollection<ProductDiscountChangeIsActiveAction>
 * @method ProductDiscountChangeIsActiveAction current()
 * @method ProductDiscountChangeIsActiveAction at($offset)
 */
class ProductDiscountChangeIsActiveActionCollection extends ProductDiscountUpdateActionCollection
{
    /**
     * @psalm-assert ProductDiscountChangeIsActiveAction $value
     * @psalm-param ProductDiscountChangeIsActiveAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountChangeIsActiveActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountChangeIsActiveAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountChangeIsActiveAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductDiscountChangeIsActiveAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductDiscountChangeIsActiveAction $data */
                $data = ProductDiscountChangeIsActiveActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
