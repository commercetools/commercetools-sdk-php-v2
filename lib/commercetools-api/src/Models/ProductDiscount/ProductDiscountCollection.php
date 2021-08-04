<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<ProductDiscount>
 * @method ProductDiscount current()
 * @method ProductDiscount end()
 * @method ProductDiscount at($offset)
 */
class ProductDiscountCollection extends BaseResourceCollection
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
        return function (?int $index): ?ProductDiscount {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductDiscount $data */
                $data = ProductDiscountModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
