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
 * @extends MapperSequence<ProductDiscountMatchQuery>
 * @method ProductDiscountMatchQuery current()
 * @method ProductDiscountMatchQuery at($offset)
 */
class ProductDiscountMatchQueryCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductDiscountMatchQuery $value
     * @psalm-param ProductDiscountMatchQuery|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountMatchQueryCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountMatchQuery) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountMatchQuery
     */
    protected function mapper()
    {
        return function (int $index): ?ProductDiscountMatchQuery {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductDiscountMatchQuery $data */
                $data = ProductDiscountMatchQueryModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
