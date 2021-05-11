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
 * @extends ProductDiscountUpdateActionCollection<ProductDiscountSetValidUntilAction>
 * @method ProductDiscountSetValidUntilAction current()
 * @method ProductDiscountSetValidUntilAction at($offset)
 */
class ProductDiscountSetValidUntilActionCollection extends ProductDiscountUpdateActionCollection
{
    /**
     * @psalm-assert ProductDiscountSetValidUntilAction $value
     * @psalm-param ProductDiscountSetValidUntilAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountSetValidUntilActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountSetValidUntilAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountSetValidUntilAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductDiscountSetValidUntilAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductDiscountSetValidUntilAction $data */
                $data = ProductDiscountSetValidUntilActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
