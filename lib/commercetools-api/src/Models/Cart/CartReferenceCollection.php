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
 * @extends MapperSequence<CartReference>
 * @method CartReference current()
 * @method CartReference at($offset)
 */
class CartReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert CartReference $value
     * @psalm-param CartReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartReference
     */
    protected function mapper()
    {
        return function (int $index): ?CartReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
