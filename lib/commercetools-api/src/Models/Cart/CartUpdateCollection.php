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
 * @extends MapperSequence<CartUpdate>
 * @method CartUpdate current()
 * @method CartUpdate at($offset)
 */
class CartUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert CartUpdate $value
     * @psalm-param CartUpdate|stdClass $value
     * @return CartUpdateCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CartUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartUpdate
     */
    protected function mapper()
    {
        return function(int $index): ?CartUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartUpdateModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}