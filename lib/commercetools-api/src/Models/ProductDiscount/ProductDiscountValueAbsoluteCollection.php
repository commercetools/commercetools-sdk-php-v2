<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Api\Models\ProductDiscount\ProductDiscountValueCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductDiscountValueCollection<ProductDiscountValueAbsolute>
 * @method ProductDiscountValueAbsolute current()
 * @method ProductDiscountValueAbsolute at($offset)
 */
class ProductDiscountValueAbsoluteCollection extends ProductDiscountValueCollection
{
    /**
     * @psalm-assert ProductDiscountValueAbsolute $value
     * @psalm-param ProductDiscountValueAbsolute|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountValueAbsoluteCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountValueAbsolute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountValueAbsolute
     */
    protected function mapper()
    {
        return function (int $index): ?ProductDiscountValueAbsolute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductDiscountValueAbsolute $data */
                $data = ProductDiscountValueAbsoluteModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
