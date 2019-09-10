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
 * @extends MapperSequence<ProductDiscountUpdate>
 *
 * @method ProductDiscountUpdate current()
 * @method ProductDiscountUpdate at($offset)
 */
class ProductDiscountUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductDiscountUpdate $value
     * @psalm-param ProductDiscountUpdate|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountUpdate
     */
    protected function mapper()
    {
        return function (int $index): ?ProductDiscountUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductDiscountUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
