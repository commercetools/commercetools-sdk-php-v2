<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Common;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CartDiscountKeyReference>
 * @method CartDiscountKeyReference current()
 * @method CartDiscountKeyReference at($offset)
 */
class CartDiscountKeyReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscountKeyReference $value
     * @psalm-param CartDiscountKeyReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountKeyReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountKeyReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountKeyReference
     */
    protected function mapper()
    {
        return function (int $index): ?CartDiscountKeyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartDiscountKeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
