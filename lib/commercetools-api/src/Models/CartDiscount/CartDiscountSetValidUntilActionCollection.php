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
 * @extends MapperSequence<CartDiscountSetValidUntilAction>
 * @method CartDiscountSetValidUntilAction current()
 * @method CartDiscountSetValidUntilAction at($offset)
 */
class CartDiscountSetValidUntilActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscountSetValidUntilAction $value
     * @psalm-param CartDiscountSetValidUntilAction|stdClass $value
     * @return CartDiscountSetValidUntilActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountSetValidUntilAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountSetValidUntilAction
     */
    protected function mapper()
    {
        return function(int $index): ?CartDiscountSetValidUntilAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartDiscountSetValidUntilActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}