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
 * @template T of CartDiscountUpdateAction
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method CartDiscountUpdateAction current()
 * @method CartDiscountUpdateAction end()
 * @method CartDiscountUpdateAction at($offset)
 */
class CartDiscountUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountUpdateAction) {
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
        return function (?int $index): ?CartDiscountUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = CartDiscountUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
