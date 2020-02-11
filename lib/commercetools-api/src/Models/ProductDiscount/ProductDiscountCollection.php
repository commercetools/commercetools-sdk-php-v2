<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductDiscount>
 * @method ProductDiscount current()
 * @method ProductDiscount at($offset)
 */
class ProductDiscountCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductDiscount $value
     * @psalm-param ProductDiscount|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscount) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscount
     */
    protected function mapper()
    {
        return function (int $index): ?ProductDiscount {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductDiscountModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
