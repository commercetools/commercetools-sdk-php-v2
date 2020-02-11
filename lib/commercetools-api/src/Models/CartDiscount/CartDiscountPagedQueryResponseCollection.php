<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CartDiscountPagedQueryResponse>
 * @method CartDiscountPagedQueryResponse current()
 * @method CartDiscountPagedQueryResponse at($offset)
 */
class CartDiscountPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscountPagedQueryResponse $value
     * @psalm-param CartDiscountPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountPagedQueryResponse
     */
    protected function mapper()
    {
        return function (int $index): ?CartDiscountPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartDiscountPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
