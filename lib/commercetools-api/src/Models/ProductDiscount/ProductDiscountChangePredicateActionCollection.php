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
 * @extends ProductDiscountUpdateActionCollection<ProductDiscountChangePredicateAction>
 * @method ProductDiscountChangePredicateAction current()
 * @method ProductDiscountChangePredicateAction end()
 * @method ProductDiscountChangePredicateAction at($offset)
 */
class ProductDiscountChangePredicateActionCollection extends ProductDiscountUpdateActionCollection
{
    /**
     * @psalm-assert ProductDiscountChangePredicateAction $value
     * @psalm-param ProductDiscountChangePredicateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountChangePredicateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountChangePredicateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountChangePredicateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductDiscountChangePredicateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductDiscountChangePredicateAction $data */
                $data = ProductDiscountChangePredicateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
