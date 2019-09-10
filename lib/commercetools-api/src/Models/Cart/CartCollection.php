<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Cart>
 * @method Cart current()
 * @method Cart at($offset)
 */
class CartCollection extends MapperSequence
{
    /**
     * @psalm-assert Cart $value
     * @psalm-param Cart|stdClass $value
     * @return CartCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof Cart) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Cart
     */
    protected function mapper()
    {
        return function(int $index): ?Cart {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}