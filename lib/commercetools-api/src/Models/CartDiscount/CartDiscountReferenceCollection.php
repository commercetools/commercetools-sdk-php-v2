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
 * @extends MapperSequence<CartDiscountReference>
 *
 * @method CartDiscountReference current()
 * @method CartDiscountReference at($offset)
 */
class CartDiscountReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscountReference $value
     * @psalm-param CartDiscountReference|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CartDiscountReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountReference
     */
    protected function mapper()
    {
        return function (int $index): ?CartDiscountReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartDiscountReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
