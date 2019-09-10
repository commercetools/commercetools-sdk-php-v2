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
 * @extends MapperSequence<ProductDiscountPagedQueryResponse>
 *
 * @method ProductDiscountPagedQueryResponse current()
 * @method ProductDiscountPagedQueryResponse at($offset)
 */
class ProductDiscountPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductDiscountPagedQueryResponse $value
     * @psalm-param ProductDiscountPagedQueryResponse|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountPagedQueryResponse
     */
    protected function mapper()
    {
        return function (int $index): ?ProductDiscountPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductDiscountPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
