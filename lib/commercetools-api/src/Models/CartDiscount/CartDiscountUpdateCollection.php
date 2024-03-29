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
 * @extends MapperSequence<CartDiscountUpdate>
 * @method CartDiscountUpdate current()
 * @method CartDiscountUpdate end()
 * @method CartDiscountUpdate at($offset)
 */
class CartDiscountUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscountUpdate $value
     * @psalm-param CartDiscountUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountUpdate $data */
                $data = CartDiscountUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
