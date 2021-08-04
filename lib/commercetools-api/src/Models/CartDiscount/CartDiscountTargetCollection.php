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
 * @template T of CartDiscountTarget
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method CartDiscountTarget current()
 * @method CartDiscountTarget end()
 * @method CartDiscountTarget at($offset)
 */
class CartDiscountTargetCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountTargetCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountTarget) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountTarget {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = CartDiscountTargetModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
