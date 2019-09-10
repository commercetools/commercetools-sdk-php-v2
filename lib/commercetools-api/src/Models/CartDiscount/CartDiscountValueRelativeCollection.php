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
 * @extends MapperSequence<CartDiscountValueRelative>
 * @method CartDiscountValueRelative current()
 * @method CartDiscountValueRelative at($offset)
 */
class CartDiscountValueRelativeCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscountValueRelative $value
     * @psalm-param CartDiscountValueRelative|stdClass $value
     * @return CartDiscountValueRelativeCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountValueRelative) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountValueRelative
     */
    protected function mapper()
    {
        return function(int $index): ?CartDiscountValueRelative {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartDiscountValueRelativeModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}