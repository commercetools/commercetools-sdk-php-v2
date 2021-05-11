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
 * @extends ProductDiscountUpdateActionCollection<ProductDiscountChangeNameAction>
 * @method ProductDiscountChangeNameAction current()
 * @method ProductDiscountChangeNameAction at($offset)
 */
class ProductDiscountChangeNameActionCollection extends ProductDiscountUpdateActionCollection
{
    /**
     * @psalm-assert ProductDiscountChangeNameAction $value
     * @psalm-param ProductDiscountChangeNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountChangeNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountChangeNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountChangeNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductDiscountChangeNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductDiscountChangeNameAction $data */
                $data = ProductDiscountChangeNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
