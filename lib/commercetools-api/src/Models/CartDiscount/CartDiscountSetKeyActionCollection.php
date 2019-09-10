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
 * @extends MapperSequence<CartDiscountSetKeyAction>
 * @method CartDiscountSetKeyAction current()
 * @method CartDiscountSetKeyAction at($offset)
 */
class CartDiscountSetKeyActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscountSetKeyAction $value
     * @psalm-param CartDiscountSetKeyAction|stdClass $value
     * @return CartDiscountSetKeyActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountSetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountSetKeyAction
     */
    protected function mapper()
    {
        return function(int $index): ?CartDiscountSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartDiscountSetKeyActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}