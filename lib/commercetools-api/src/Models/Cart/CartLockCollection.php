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
 * @extends MapperSequence<CartLock>
 * @method CartLock current()
 * @method CartLock end()
 * @method CartLock at($offset)
 */
class CartLockCollection extends MapperSequence
{
    /**
     * @psalm-assert CartLock $value
     * @psalm-param CartLock|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartLockCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartLock) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartLock
     */
    protected function mapper()
    {
        return function (?int $index): ?CartLock {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartLock $data */
                $data = CartLockModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
