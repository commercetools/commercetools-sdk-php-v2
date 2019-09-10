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
 * @extends MapperSequence<ProductDiscountValue>
 *
 * @method ProductDiscountValue current()
 * @method ProductDiscountValue at($offset)
 */
class ProductDiscountValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductDiscountValue $value
     * @psalm-param ProductDiscountValue|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountValue
     */
    protected function mapper()
    {
        return function (int $index): ?ProductDiscountValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductDiscountValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
