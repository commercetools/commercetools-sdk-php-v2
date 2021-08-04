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
 * @extends ProductDiscountUpdateActionCollection<ProductDiscountSetValidFromAction>
 * @method ProductDiscountSetValidFromAction current()
 * @method ProductDiscountSetValidFromAction end()
 * @method ProductDiscountSetValidFromAction at($offset)
 */
class ProductDiscountSetValidFromActionCollection extends ProductDiscountUpdateActionCollection
{
    /**
     * @psalm-assert ProductDiscountSetValidFromAction $value
     * @psalm-param ProductDiscountSetValidFromAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountSetValidFromActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountSetValidFromAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountSetValidFromAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductDiscountSetValidFromAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductDiscountSetValidFromAction $data */
                $data = ProductDiscountSetValidFromActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
