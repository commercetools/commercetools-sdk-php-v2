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
 * @extends MapperSequence<CartDiscountUpdateAction>
 * @method CartDiscountUpdateAction current()
 * @method CartDiscountUpdateAction at($offset)
 */
class CartDiscountUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscountUpdateAction $value
     * @psalm-param CartDiscountUpdateAction|stdClass $value
     * @return CartDiscountUpdateActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountUpdateAction
     */
    protected function mapper()
    {
        return function(int $index): ?CartDiscountUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartDiscountUpdateActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}