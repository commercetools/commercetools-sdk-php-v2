<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CartPagedQueryResponse>
 * @method CartPagedQueryResponse current()
 * @method CartPagedQueryResponse at($offset)
 */
class CartPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert CartPagedQueryResponse $value
     * @psalm-param CartPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartPagedQueryResponse
     */
    protected function mapper()
    {
        return function (int $index): ?CartPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
