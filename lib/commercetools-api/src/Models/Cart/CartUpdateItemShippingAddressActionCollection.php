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
 * @extends MapperSequence<CartUpdateItemShippingAddressAction>
 * @method CartUpdateItemShippingAddressAction current()
 * @method CartUpdateItemShippingAddressAction at($offset)
 */
class CartUpdateItemShippingAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartUpdateItemShippingAddressAction $value
     * @psalm-param CartUpdateItemShippingAddressAction|stdClass $value
     * @return CartUpdateItemShippingAddressActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CartUpdateItemShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartUpdateItemShippingAddressAction
     */
    protected function mapper()
    {
        return function(int $index): ?CartUpdateItemShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartUpdateItemShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}