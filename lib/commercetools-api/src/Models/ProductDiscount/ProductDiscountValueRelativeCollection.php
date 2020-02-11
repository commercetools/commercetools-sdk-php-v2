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
 * @extends MapperSequence<ProductDiscountValueRelative>
 * @method ProductDiscountValueRelative current()
 * @method ProductDiscountValueRelative at($offset)
 */
class ProductDiscountValueRelativeCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductDiscountValueRelative $value
     * @psalm-param ProductDiscountValueRelative|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountValueRelativeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountValueRelative) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountValueRelative
     */
    protected function mapper()
    {
        return function (int $index): ?ProductDiscountValueRelative {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductDiscountValueRelativeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
