<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductSetDiscountedPriceAction>
 * @method ProductSetDiscountedPriceAction current()
 * @method ProductSetDiscountedPriceAction at($offset)
 */
class ProductSetDiscountedPriceActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSetDiscountedPriceAction $value
     * @psalm-param ProductSetDiscountedPriceAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSetDiscountedPriceActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetDiscountedPriceAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetDiscountedPriceAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductSetDiscountedPriceAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductSetDiscountedPriceActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
