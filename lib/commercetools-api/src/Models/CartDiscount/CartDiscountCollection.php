<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CartDiscount>
 * @method CartDiscount current()
 * @method CartDiscount at($offset)
 */
class CartDiscountCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscount $value
     * @psalm-param CartDiscount|stdClass $value
     * @return CartDiscountCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscount) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscount
     */
    protected function mapper()
    {
        return function(int $index): ?CartDiscount {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartDiscountModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}