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
 * @extends MapperSequence<CartAddDiscountCodeAction>
 * @method CartAddDiscountCodeAction current()
 * @method CartAddDiscountCodeAction at($offset)
 */
class CartAddDiscountCodeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartAddDiscountCodeAction $value
     * @psalm-param CartAddDiscountCodeAction|stdClass $value
     * @return CartAddDiscountCodeActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CartAddDiscountCodeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartAddDiscountCodeAction
     */
    protected function mapper()
    {
        return function(int $index): ?CartAddDiscountCodeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartAddDiscountCodeActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}